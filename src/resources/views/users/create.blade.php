@extends('layouts.app')

@section('content')

    <h1 class="text-center">ユーザー新規作成ページ</h1>

    <div class="m-4">
        <form action="/users/0" method="get">
            <div class="form-group row">
                <label class="col-2 col-form-label">社員番号</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">姓</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">名</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">メールアドレス</label>
                <div class="col-10">
                    <input type="email" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">管理者フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>無効</option>
                        <option>有効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">作成</button>
            </div>
        </form>
    </div>

@endsection