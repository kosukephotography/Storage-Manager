<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\User;
use App\Http\Requests\UsersUpdateRequest;
use App\Http\Requests\UsersStoreRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();

        $employee_number = '';
        $email = '';
        $is_admin = '';
        $deleted_at = '';
        
        return view('users.index', [
            'users' => $users,
            'employee_number' => $employee_number,
            'email' => $email,
            'is_admin' => $is_admin,
            'deleted_at' => $deleted_at,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsersStoreRequest $request)
    {
        $by_id = Auth::user()->id;

        $new_user = User::create([
            'employee_number' => $request->employee_number,
            'email' => $request->email,
            'family_name' => $request->family_name,
            'first_name' => $request->first_name,
            'is_admin' => $request->is_admin,
            'created_by' => $by_id,
            'updated_by' => $by_id,
            'password' => bcrypt('secret'),
        ]);

        return redirect()->route('users.show', $new_user->id)->with('information', 'レコードを作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::with(['createdByUser', 'updatedByUser'])->findOrFail($id);

        return view('users.show', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit', [
            'user' => $user,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsersUpdateRequest $request, $id)
    {
        $now = \Carbon\Carbon::now();
        $user = User::find($id);
        $by_id = Auth::user()->id;

        $user->fill([
            'employee_number' => $request->employee_number,
            'email' => $request->email,
            'family_name' => $request->family_name,
            'first_name' => $request->first_name,
            'is_admin' => $request->is_admin,
            'updated_by' => $by_id,
            'deleted_at' => $request->deleted_at ? $now : null,
        ])
        ->save();

        return redirect()->route('users.show', $user->id)->with('information', 'レコードを更新しました。');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function mypage()
    {
        $user = Auth::user();
        $reservations = Reservation::where('created_by', $user->id)->orderByDesc('id')->get();

        return view('users.mypage', [
            'user' => $user,
            'reservations' => $reservations,
        ]);
    }

    public function search(Request $request)
    {
        $users = User::query()
        ->when($request->employee_number, function ($query, $employeeNumber) {
            return $query->where('employee_number', 'like', '%' . $employeeNumber . '%');
        })
        ->when($request->email, function ($query, $email) {
            return $query->where('email', 'like', '%' . $email . '%');
        })
        ->when($request->is_admin === "1", function ($query) {
            return $query->where('is_admin', "1");
        })
        ->when($request->is_admin === "0", function ($query) {
            return $query->where('is_admin', "0");
        })
        ->when($request->deleted_at === "1", function ($query) {
            return $query->whereNotNull('deleted_at');
        })
        ->when($request->deleted_at === "0", function ($query) {
            return $query->whereNull('deleted_at');
        })
        ->get();

        return view('users.index', [
            'users' => $users,
            'employee_number' => $request->employee_number,
            'email' => $request->email,
            'is_admin' => $request->is_admin,
            'deleted_at' => $request->deleted_at,
        ]);
    }

    public function csv(Request $request)
    {
        // ヘッダー生成
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=users.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        // データ取得＆生成
        $users = User::query()
        ->when($request->employee_number, function ($query, $employeeNumber) {
            return $query
                ->where('employee_number', 'like', '%' . $employeeNumber . '%');
        })
        ->when($request->email, function ($query, $email) {
            return $query->where('email', 'like', '%' . $email . '%');
        })
        ->when($request->is_admin === "1", function ($query) {
            return $query->where('is_admin', "1");
        })
        ->when($request->is_admin === "0", function ($query) {
            return $query->where('is_admin', "0");
        })
        ->when($request->deleted_at === "1", function ($query) {
            return $query->whereNotNull('deleted_at');
        })
        ->when($request->deleted_at === "0", function ($query) {
            return $query->whereNull('deleted_at');
        })
        ->get();
        $this->users = $users;

        $callback = function()
        {
            $createCsvFile = fopen('php://output', 'w'); //ファイル作成
            
            $columns = [ //1行目の情報
                'id',
                'employee_number',
                'family_name',
                'first_name',
                'email',
                'is_admin',
                'created_at',
                'created_by',
                'updated_at',
                'updated_by',
                'deleted_at',
            ];

            mb_convert_variables('SJIS-win', 'UTF-8', $columns); //文字化け対策
    
            fputcsv($createCsvFile, $columns); //1行目の情報を追記

            $users = $this->users;

            foreach ($users as $user) {  //データを1行ずつ回す
                $csv = [
                    $user->id,  //オブジェクトなので -> で取得
                    $user->employee_number,
                    $user->family_name,
                    $user->first_name,
                    $user->email,
                    $user->is_admin,
                    $user->created_at,
                    $user->created_by,
                    $user->updated_at,
                    $user->updated_by,
                    $user->deleted_at,
                ];

                mb_convert_variables('SJIS-win', 'UTF-8', $csv); //文字化け対策

                fputcsv($createCsvFile, $csv); //ファイルに追記する
            }
            fclose($createCsvFile); //ファイル閉じる
        };
        
        return response()->stream($callback, 200, $headers);
    }
}