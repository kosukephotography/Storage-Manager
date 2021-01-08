@extends('layouts.app')

@section('content')

    <h1 class="text-center">ユーザー新規作成ページ</h1>

    <div class="m-4">
        <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label">社員番号</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="employee_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">姓</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="family_name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">名</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="first_name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">メールアドレス</label>
                <div class="col-10">
                    <input type="email" class="form-control" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">管理者フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="is_admin">
                        <option value="0">無効</option>
                        <option value="1">有効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">作成</button>
            </div>
        </form>
    </div>

@endsection