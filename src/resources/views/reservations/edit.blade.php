@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N の予約編集ページ</h1>

    <div class="m-4">
        <form action="/reservations/0">
            <div class="form-group row">
                <label class="col-2 col-form-label">ストレージID</label>
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
                <label class="col-2 col-form-label">予約開始日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">予約終了日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <form action="/reservations/0" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">戻る</button>
            </div>
        </form>

    </div>








@endsection