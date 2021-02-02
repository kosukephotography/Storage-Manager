@extends('layouts.app')

@section('content')

<h1 class="text-center">予約 新規作成ページ</h1>

<div class="m-4">
    <form action="{{ route('reservations.store') }}" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-2 col-form-label" for="storage_id">ストレージID</label>
            <div class="col-10">
                <input type="text" class="form-control" name="storage_id" id="storage_id" value="{{ old('storage_id') }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label" for="start_date">予約開始日</label>
            <div class="col-10">
                <input type="date" class="form-control" name="start_date" id="start_date" value="{{ old('start_date') }}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label" for="end_date">予約終了日</label>
            <div class="col-10">
                <input type="date" class="form-control" name="end_date" id="end_date" value="{{ old('end_date') }}">
            </div>
        </div>

        <div class="form-group row">
            <button type="submit" class="btn btn-primary col-12">作成</button>
        </div>
    </form>

</div>

@endsection