<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OpportunityRelation;

class OpportunityRelationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storage_id = '';
        $opportunity_id = '';
        $deleted_at = '';

        $opportunity_relations = OpportunityRelation::all();

        return view('opportunity_relations.index', [
            'opportunity_relations' => $opportunity_relations,
            'storage_id' => $storage_id,
            'opportunity_id' => $opportunity_id,
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
        return view('opportunity_relations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opportunity_relations = OpportunityRelation::with(['createdByUser', 'updatedByUser'])->findOrFail($id);

        return view('opportunity_relations.show', [
            'opportunity_relations' => $opportunity_relations,
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
        return view('opportunity_relations.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function search(Request $request)
    {
        $opportunity_relations = OpportunityRelation::query()
        ->when($request->storage_id, function ($query, $storageId) {
            return $query->where('storage_id', 'like', '%' . $storageId . '%');
        })
        ->when($request->opportunity_id, function ($query, $opportunityId) {
            return $query->where('opportunity_id', 'like', '%' . $opportunityId . '%');
        })
        ->when($request->deleted_at === "1", function ($query) {
            return $query->whereNotNull('deleted_at');
        })
        ->when($request->deleted_at === "0", function ($query) {
            return $query->whereNull('deleted_at');
        })
        ->get();

        return view('opportunity_relations.index', [
            'opportunity_relations' => $opportunity_relations,
            'storage_id' => $request->storage_id,
            'opportunity_id' => $request->opportunity_id,
            'deleted_at' => $request->deleted_at,
        ]);
    }

    public function csv(Request $request)
    {
        // ヘッダー生成
        $headers = [
            'Content-type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename=opportunity_relations.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        // データ取得＆生成
        $opportunity_relations = OpportunityRelation::query()
        ->when($request->storage_id, function ($query, $storageId) {
            return $query->where('storage_id', 'like', '%' . $storageId . '%');
        })
        ->when($request->opportunity_id, function ($query, $opportunityId) {
            return $query->where('opportunity_id', 'like', '%' . $opportunityId . '%');
        })
        ->when($request->deleted_at === "1", function ($query) {
            return $query->whereNotNull('deleted_at');
        })
        ->when($request->deleted_at === "0", function ($query) {
            return $query->whereNull('deleted_at');
        })
        ->get();
        $this->opportunity_relations = $opportunity_relations;

        $callback = function()
        {
            $createCsvFile = fopen('php://output', 'w'); //ファイル作成
            
            $columns = [ //1行目の情報
                'id',
                'storage_id',
                'opportunity_id',
                'created_at',
                'created_by',
                'updated_at',
                'updated_by',
                'deleted_at',
            ];

            mb_convert_variables('SJIS-win', 'UTF-8', $columns); //文字化け対策
    
            fputcsv($createCsvFile, $columns); //1行目の情報を追記

            $opportunity_relations = $this->opportunity_relations;

            foreach ($opportunity_relations as $opportunity_relation) {  //データを1行ずつ回す
                $csv = [
                    $opportunity_relation->id,  //オブジェクトなので -> で取得
                    $opportunity_relation->storage_id,
                    $opportunity_relation->opportunity_id,
                    $opportunity_relation->created_at,
                    $opportunity_relation->created_by,
                    $opportunity_relation->updated_at,
                    $opportunity_relation->updated_by,
                    $opportunity_relation->deleted_at,
                ];

                mb_convert_variables('SJIS-win', 'UTF-8', $csv); //文字化け対策

                fputcsv($createCsvFile, $csv); //ファイルに追記する
            }
            fclose($createCsvFile); //ファイル閉じる
        };
        
        return response()->stream($callback, 200, $headers);
    }
}
