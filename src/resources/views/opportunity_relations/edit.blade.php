@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $opportunity_relations->id }} の関連案件情報 編集ページ</h1>

    <div class="m-4">
        <form action="{{ route('opportunity_relations.update', ['id' => $opportunity_relations->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="storage_id">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="storage_id" id="storage_id" value="{{ $opportunity_relations->storage_id }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="opportunity_id">SF案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="opportunity_id" id="opportunity_id" value="{{ $opportunity_relations->opportunity_id }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at">
                        <option value="1" {{ isset($opportunity_relations->deleted_at) ? 'selected' : '' }}>有効</option>
                        <option value="0" {{ !isset($opportunity_relations->deleted_at) ? 'selected' : '' }}>無効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <div class="row">
            <a href="{{ route('opportunity_relations.show', ['id' => $opportunity_relations->id]) }}" class="btn btn-info col-12">戻る</a>
        </div>
    </div>








@endsection