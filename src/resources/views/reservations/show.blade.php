@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $reservation->id }} の予約詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>{{ $reservation->id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">ストレージID</th>
                <td>{{ $reservation->storage_id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">ステータス</th>
                <td>{{ $reservation->status }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">利用開始日</th>
                <td>{{ $reservation->start_date }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">利用終了日</th>
                <td>{{ $reservation->end_date }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日時</th>
                <td>{{ $reservation->created_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>{{ $reservation->createdByUser->full_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日時</th>
                <td>{{ $reservation->updated_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>{{ $reservation->updatedByUser->full_name }}</td>
            </tr>
        </table>
    </div>

    @if(Auth::user()->is_admin == 1)
        <div class="m-4">
            <a href="{{ route('reservations.edit', ['id' => $reservation->id]) }}" class="btn btn-primary col-12">編集</a>
        </div>
    @endif

@endsection