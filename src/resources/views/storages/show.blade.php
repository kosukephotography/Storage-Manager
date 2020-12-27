@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N のストレージ詳細ページ</h1>

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
                <th class="text-center bg-secondary text-light">容量</th>
                <td>2TB</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">シリアルナンバー</th>
                <td>SN12345678</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">種別</th>
                <td>ライブラリ</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">対応OS</th>
                <td>Mac</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">復旧キー</th>
                <td>qwertyuiopasdfghjkl</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">パスワード</th>
                <td>1qaz2wsx</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">抹消フラグ</th>
                <td>無効</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">抹消理由</th>
                <td>おはようございますこんにちはこんばんはほげほげ</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">関連案件ID</th>
                <td>
                    <ul>
                        <li>PR123456789</li>
                        <li>PR123456789</li>
                    </ul>
                </td>
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
            <tr>
                <th class="text-center bg-secondary text-light">現在の利用者</th>
                <td>浦島　太郎</td>
            </tr>
        </table>
    </div>

    <div class="m-4">
        <form action="/storages/0/edit" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">編集</button>
            </div>
        </form>
    </div>

@endsection