@extends('layouts.app')

@section('content')

    <h1 class="text-center">関連案件情報 一覧ページ</h1>


    <div class="m-4">
        <form action="{{ route('opportunity_relations.search') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="storage_id">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="storage_id" id="storage_id" value="{{ $storage_id }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="opportunity_id">SF案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="opportunity_id" id="opportunity_id" value="{{ $opportunity_id }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at">
                        <option></option>
                        <option value="1" {{ $deleted_at === '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $deleted_at === '0' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>

        @if(Auth::user()->is_admin == 1)
            <form action="{{ route('opportunity_relations.csv') }}" method="post">
                @csrf
                <input type="hidden" name="storage_id" value="{{$storage_id}}">
                <input type="hidden" name="opportunity_id" value="{{$opportunity_id}}">
                <input type="hidden" name="deleted_at" value="{{$deleted_at}}">
                <div class="form-group row">
                    <button type="submit" class="btn btn-info col-12">検索結果をcsv出力</button>
                </div>
            </form>
        @endif

    </div>



        <table class="table table-hover">
            <tr class="bg-secondary text-light">
                <th class="text-center">ID</th>
                <th class="text-center">ストレージID</th>
                <th class="text-center">SF案件ID</th>
                <th class="text-center">抹消フラグ</th>
            </tr>

            @foreach ($opportunity_relations as $opportunity_relation)
                <tr>
                    <td class="text-center"><a href="{{ route('opportunity_relations.show', ['id' => $opportunity_relation->id]) }}">{{$opportunity_relation->id}}</a></td>
                    <td class="text-center"><a href="{{ route('storages.show', ['id' => $opportunity_relation->storage_id]) }}">{{$opportunity_relation->storage_id}}</a></td>
                    <td class="text-center">{{$opportunity_relation->opportunity_id}}</td>
                    <td class="text-center">{{ empty($opportunity_relation->deleted_at) ? '' : 'Yes' }}</td>
                </tr>
            @endforeach

        </table>

@endsection