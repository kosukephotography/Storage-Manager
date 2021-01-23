@extends('layouts.app')

@section('content')

    <h1 class="text-center">関連案件情報 新規作成ページ</h1>

    <div class="m-4">
        <form action="{{ route('opportunity_relations.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="storage_id">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="storage_id" id="storage_id" value="{{ old('storage_id') }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="opportunity_id">SF案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="opportunity_id" id="opportunity_id" value="{{ old('opportunity_id') }}">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">作成</button>
            </div>
        </form>
    </div>

@endsection