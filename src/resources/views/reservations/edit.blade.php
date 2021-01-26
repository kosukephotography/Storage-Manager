@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $reservation->id }} の予約編集ページ</h1>

    <div class="m-4">
        <form action="{{ route('reservations.update', ['id' => $reservation->id]) }}" method="post">
            @method('PUT')
            @csrf

            <div class="form-group row">
                <label class="col-2 col-form-label" for="status">予約ステータス</label>
                <div class="col-10">
                    <select class="form-control" name="status" id="status">
                        <option value="予約中" {{ $reservation->status === '予約中' ? 'selected' : '' }}>予約中</option>
                        <option value="貸出済" {{ $reservation->status === '貸出済' ? 'selected' : '' }}>貸出済</option>
                        <option value="期限切れ未返却" {{ $reservation->status === '期限切れ未返却' ? 'selected' : '' }}>期限切れ未返却</option>
                        <option value="返却済" {{ $reservation->status === '返却済' ? 'selected' : '' }}>返却済</option>
                        <option value="キャンセル" {{ $reservation->status === 'キャンセル' ? 'selected' : '' }}>キャンセル</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <div class="row">
            <a href="{{ route('reservations.show', ['id' => $reservation->id]) }}" class="btn btn-info col-12">戻る</a>
        </div>

    </div>








@endsection