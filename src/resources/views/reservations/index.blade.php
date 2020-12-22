@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約一覧ページ</h1>

    <div class="m-4">
        <form>
            <div class="form-group row">
                <label class="col-2 col-form-label">ID</label>
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



@endsection