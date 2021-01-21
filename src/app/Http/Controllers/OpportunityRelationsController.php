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
        return view('opportunity_relations.show');
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
        $storage_id = $request->size;
        $opportunity_id = $request->opportunity_id;
        $deleted_at = $request->deleted_at;

        $query = OpportunityRelation::query();

        if(isset($storage_id)) {
            $query->where('storage_id', 'like', '%' . $storage_id . '%');
        }
        if(isset($opportunity_id)) {
            $query->where('opportunity_id', 'like', '%' . $opportunity_id . '%');
        }
        if(isset($deleted_at)) {
            if($deleted_at == 1) {
                $query->whereNotNull('deleted_at');
            } elseif ($deleted_at == 0) {
                $query->whereNull('deleted_at');
            }
        }

        $opportunity_relations = $query->get();

        return view('opportunity_relations.index', [
            'opportunity_relations' => $opportunity_relations,
            'storage_id' => $storage_id,
            'opportunity_id' => $opportunity_id,
            'deleted_at' => $deleted_at,
        ]);
    }
}
