@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $user->id }} のユーザー詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>{{ $user->id }}</td>
            </tr>
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
            <tr>
                <th class="text-center bg-secondary text-light">管理者フラグ</th>
                <td>{{ $user->is_admin == 1 ? 'Yes' : '' }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">失効フラグ</th>
                <td>{{ $user->deleted_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日時</th>
                <td>{{ $user->created_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>{{ $user->createdByUser->full_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日時</th>
                <td>{{ $user->updated_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>{{ $user->updatedByUser->full_name }}</td>
            </tr>
        </table>
    </div>

    <div class="m-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary col-12">編集</a>
    </div>

@endsection