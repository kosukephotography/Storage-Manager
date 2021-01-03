@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約一覧ページ</h1>

    <div class="m-4">
        <form>
            <div class="form-group row">
                <label class="col-2 col-form-label">予約ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">予約者</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">予約ステータス</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>すべて</option>
                        <option>予約中</option>
                        <option>貸出済</option>
                        <option>期限切れ未返却</option>
                        <option>返却済</option>
                        <option>キャンセル</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">検索開始日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">検索終了日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>
        <form>
        <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">検索結果をcsv出力</button>
            </div>
        </form>
    </div>

    <table class="table table-hover">
        <tr class="bg-secondary text-light">
            <th class="text-center">予約ID</th>
            <th class="text-center">ストレージID</th>
            <th class="text-center">予約者</th>
            <th class="text-center">予約ステータス</th>
            <th class="text-center">予約開始日</th>
            <th class="text-center">予約終了日</th>
        </tr>

        @for ($i = 0; $i < 10; $i++)
            <tr>
                <td class="text-center"><a href="/reservations/{{$i}}">RS00000{{$i}}</a></td>
                <td class="text-center"><a href="/storages/{{$i}}">ST00000{{$i}}</a></td>
                <td class="text-center"><a href="/users/{{$i}}">浦島 太郎</a></td>
                <td class="text-center">貸出済</td>
                <td class="text-center">2020/12/22</td>
                <td class="text-center">2021/12/28</td>
            </tr>
        @endfor

    </table>



@endsection