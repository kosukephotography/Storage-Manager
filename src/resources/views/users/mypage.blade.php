@extends('layouts.app')

@section('content')

    <h1 class="text-center">マイページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">社員番号</th>
                <td>NNNNNNNN</td>
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
                <th class="text-center bg-secondary text-light">メールアドレス</th>
                <td>test@test.com</td>
            </tr>
        </table>
    </div>

        <form action="#" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-warning col-12">パスワード変更</button>
            </div>
        </form>
    </div>

@endsection