@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N の関連案件情報 詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>N</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">ストレージID</th>
                <td>ST000001</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">SF案件ID</th>
                <td>PR123456789</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">無効化フラグ</th>
                <td>0</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日</th>
                <td>YYYY/MM/DD</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>浦島　太郎</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日</th>
                <td>YYYY/MM/DD</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>浦島　太郎</td>
            </tr>
        </table>
    </div>





    <div class="m-4">
        <form action="/opportunity_relations/0/edit" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">編集</button>
            </div>
        </form>
    </div>

@endsection