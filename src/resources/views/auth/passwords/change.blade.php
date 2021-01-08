@extends('layouts.app')

@section('content')

    <h1 class="text-center">パスワード変更ページ</h1>

    <div class="m-4">
        <form action="{{ route('password.change') }}" method="post">
            @csrf

            <div class="form-group row">
                <label class="col-2 col-form-label">現在のパスワード</label>
                <div class="col-10">
                    <input type="password" class="form-control" name="current_password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">新しいパスワード</label>
                <div class="col-10">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">新しいパスワード（確認用）</label>
                <div class="col-10">
                    <input type="password" class="form-control" name="password_confirmation">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>
    </div>



@endsection