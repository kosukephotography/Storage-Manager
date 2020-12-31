@extends('layouts.app')

@section('content')

    <h1 class="text-center">マイページ</h1>

    <h2 class="text-center pt-5">ユーザー情報</h2>

    <div class="m-4">
        <table class="table table-bordered">
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
        </table>
    </div>

    <form action="#" method="get">
        <div class="form-group row">
            <button type="submit" class="btn btn-warning col-12">パスワード変更</button>
        </div>
    </form>

    <h2 class="text-center pt-5">有効な予約情報</h2>

    <table class="table table-hover mt-4">
        <tr class="bg-secondary text-light">
            <th class="text-center">予約番号</th>
            <th class="text-center">ストレージID</th>
            <th class="text-center">予約ステータス</th>
            <th class="text-center">予約開始日</th>
            <th class="text-center">予約終了日</th>
        </tr>

        @for ($i = 0; $i < 4; $i++)
            <tr>
                <td class="text-center"><a href="/reservations/{{$i}}">RS00000{{$i}}</a></td>
                <td class="text-center"><a href="/storages/{{$i}}">ST00000{{$i}}</a></td>
                <td class="text-center">貸出済</td>
                <td class="text-center">2020/12/22</td>
                <td class="text-center">2021/12/28</td>
            </tr>
        @endfor



@endsection