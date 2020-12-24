@extends('layouts.app')

@section('content')

<h1 class="text-center">予約 新規作成ページ</h1>

<div class="m-4">
    <form action="/reservations/0">
        <div class="form-group row">
            <label class="col-2 col-form-label">ストレージID</label>
            <div class="col-10">
                <input type="text" class="form-control" name="">
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
            <button type="submit" class="btn btn-primary col-12">作成</button>
        </div>
    </form>

</div>

@endsection