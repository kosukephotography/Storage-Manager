@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N の予約詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>RS000001</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">ストレージID</th>
                <td><a href="/storages/1">ST000001</a></td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">予約ステータス</th>
                <td>貸出済</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">予約開始日</th>
                <td>YYYY/MM/DD</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">予約終了日</th>
                <td>YYYY/MM/DD</td>
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
        <form action="/reservations/0/edit" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">編集</button>
            </div>
        </form>

        <form action="/reservations/0" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-danger col-12">キャンセル</button>
            </div>
        </form>
    </div>

@endsection