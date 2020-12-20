@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N の関連案件情報 編集ページ</h1>

    <div class="m-4">
        <form action="/opportunity_relations/0">
            <div class="form-group row">
                <label class="col-2 col-form-label">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">SF案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">無効化フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <form action="/opportunity_relations/0" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">戻る</button>
            </div>
        </form>

    </div>








@endsection