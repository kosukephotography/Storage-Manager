@extends('layouts.app')

@section('content')

    <h1 class="text-center">マイページ</h1>

    <h2 class="text-center pt-5">ユーザー情報</h2>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">社員番号</th>
                <td>{{ $user->employee_number }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">メールアドレス</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">姓</th>
                <td>{{ $user->family_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">名</th>
                <td>{{ $user->first_name }}</td>
            </tr>
        </table>
    </div>

    <a href="/password/change" class="btn btn-warning col-12">パスワード変更</a>

    <h2 class="text-center pt-5">自分の予約情報一覧</h2>

    <table class="table table-hover mt-4">
        <tr class="bg-secondary text-light">
            <th class="text-center">予約番号</th>
            <th class="text-center">ストレージID</th>
            <th class="text-center">予約ステータス</th>
            <th class="text-center">予約開始日</th>
            <th class="text-center">予約終了日</th>
        </tr>

        @foreach ($reservations as $reservation)

            <tr>
                <td class="text-center"><a href="/reservations/{{ $reservation->id }}">{{ $reservation->id }}</a></td>
                <td class="text-center"><a href="/storages/{{ $reservation->storage_id }}">{{ $reservation->storage_id }}</a></td>
                <td class="text-center">{{ $reservation->status }}</td>
                <td class="text-center">{{ $reservation->start_date }}</td>
                <td class="text-center">{{ $reservation->end_date }}</td>
            </tr>

        @endforeach

    </table>

@endsection