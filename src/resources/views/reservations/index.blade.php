@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約一覧ページ</h1>

    <div class="m-4">
        <form action="{{ route('reservations.search') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="storage_id">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="storage_id" id="storage_id" value="{{$storage_id}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="status">予約ステータス</label>
                <div class="col-10">
                    <select class="form-control" name="status" id="status">
                        <option></option>
                        <option value="予約中" {{ $status === '予約中' ? 'selected' : '' }}>予約中</option>
                        <option value="貸出済" {{ $status === '貸出済' ? 'selected' : '' }}>貸出済</option>
                        <option value="期限切れ未返却" {{ $status === '期限切れ未返却' ? 'selected' : '' }}>期限切れ未返却</option>
                        <option value="返却済" {{ $status === '返却済' ? 'selected' : '' }}>返却済</option>
                        <option value="キャンセル" {{ $status === 'キャンセル' ? 'selected' : '' }}>キャンセル</option>
                    </select>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-2 col-form-label" for="start_date">検索開始日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="start_date" id="start_date" value="{{$start_date}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="end_date">検索終了日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="end_date" id="end_date" value="{{$end_date}}">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>

        <form action="{{ route('reservations.csv') }}" method="post">
            @csrf
            <input type="hidden" name="storage_id" value="{{$storage_id}}">
            <input type="hidden" name="status" value="{{$status}}">
            <input type="hidden" name="start_date" value="{{$start_date}}">
            <input type="hidden" name="end_date" value="{{$end_date}}">
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

        @foreach ($reservations as $reservation)
            <tr>
                <td class="text-center"><a href="{{ route('reservations.show', ['id' =>$reservation->id]) }}">{{$reservation->id}}</a></td>
                <td class="text-center"><a href="{{ route('storages.show', ['id' =>$reservation->storage_id]) }}">{{$reservation->storage_id}}</a></td>
                <td class="text-center">{{$reservation->createdByUser->full_name}}</td>
                <td class="text-center">{{$reservation->status}}</td>
                <td class="text-center">{{$reservation->start_date}}</td>
                <td class="text-center">{{$reservation->end_date}}</td>
            </tr>
        @endforeach

    </table>



@endsection