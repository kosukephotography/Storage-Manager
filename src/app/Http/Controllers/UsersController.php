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
        $now = \Carbon\Carbon::now();
        $user = new User;
        $by_id = Auth::user()->id;

        $user->employee_number = $request->employee_number;
        $user->email = $request->email;
        $user->family_name = $request->family_name;
        $user->first_name = $request->first_name;
        $user->is_admin = $request->is_admin;
        $user->created_by = $by_id;
        $user->updated_by = $by_id;
        $user->password = bcrypt('secret');
        $user->save();

        $new_user_id = User::where('employee_number', $request->employee_number)->first();

        return redirect()->route('users.show', $new_user_id)->with('information', 'レコードを作成しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        $created_by = User::find($user->created_by)->family_name . ' ' . User::find($user->created_by)->first_name;
        $updated_by = User::find($user->updated_by)->family_name . ' ' . User::find($user->updated_by)->first_name;

        return view('users.show', [
            'user' => $user,
            'created_by' => $created_by,
            'updated_by' => $updated_by,
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

        $user->employee_number = $request->employee_number;
        $user->email = $request->email;
        $user->family_name = $request->family_name;
        $user->first_name = $request->first_name;
        $user->is_admin = $request->is_admin;
        $user->updated_by = $by_id;
        if ($request->deleted_at == 1) {
            $user->deleted_at = $now;
        } elseif ($request->deleted_at == 0) {
            $user->deleted_at = null;
        }
        $user->save();

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
        $query = User::query();

        $employee_number = $request->employee_number;
        $email = $request->email;
        $is_admin = $request->is_admin;
        $deleted_at = $request->deleted_at;

        if(isset($employee_number)) {
            $query->where('employee_number', 'like', '%' . $employee_number . '%');
        }
        if(isset($email)) {
            $query->where('email', 'like', '%' . $email . '%');
        }
        if(isset($is_admin)) {
            $query->where('is_admin', $is_admin);
        }
        if(isset($deleted_at)) {
            if($deleted_at == 1) {
                $query->whereNotNull('deleted_at');
            } elseif ($deleted_at == 0) {
                $query->whereNull('deleted_at');
            }
        }

        $users = $query->get();

        return view('users.index', [
            'users' => $users,
            'employee_number' => $employee_number,
            'email' => $email,
            'is_admin' => $is_admin,
            'deleted_at' => $deleted_at,
        ]);
    }

    public function csv()
    {
        $headers = [ //ヘッダー情報
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=users.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

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

            $users = User::all();

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
        
        return response()->stream($callback, 200, $headers); //ここで実行
    }
}