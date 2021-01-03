@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N のユーザー詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>N</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">社員番号</th>
                <td>NNNNNNNN</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">メールアドレス</th>
                <td>test@test.com</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">姓</th>
                <td>浦島</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">名</th>
                <td>太郎</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">管理者フラグ</th>
                <td>無効</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">失効フラグ</th>
                <td>無効</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日時</th>
                <td>1970-01-01 00:00:01.000000</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>浦島　太郎</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日時</th>
                <td>1970-01-01 00:00:01.000000</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>浦島　太郎</td>
            </tr>
        </table>
    </div>

    <div class="m-4">
        <form action="/users/0/edit" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">編集</button>
            </div>
        </form>

        <form action="/users/0" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-warning col-12">パスワード再発行</button>
            </div>
        </form>
    </div>

@endsection