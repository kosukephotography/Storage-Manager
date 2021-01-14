@extends('layouts.app')

@section('content')

    <h1 class="text-center">ユーザー一覧ページ</h1>

    <div class="m-4">
        <form action="{{ route('users.search') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="employee_number">社員番号</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="employee_number" id="employee_number" value="{{$employee_number}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="email">メールアドレス</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="email" id="email" value="{{$email}}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="is_admin">管理者フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="is_admin" id="is_admin">
                    <option></option>
                        <option value="1" {{ $is_admin === '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $is_admin === '0' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">失効フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at" value="{{$deleted_at}}">
                        <option></option>
                        <option value="1" {{ $deleted_at === '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $deleted_at === '0' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>

        <form action="{{ route('users.csv') }}" method="post">
            @csrf
            <input type="hidden" name="employee_number" value="{{$employee_number}}">
            <input type="hidden" name="email" value="{{$email}}">
            <input type="hidden" name="is_admin" value="{{$is_admin}}">
            <input type="hidden" name="deleted_at" value="{{$deleted_at}}">
            <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">現在の検索結果をcsv出力</button>
            </div>
        </form>

    </div>

    <table class="table table-hover">
        <tr class="bg-secondary text-light">
            <th class="text-center">ID</th>
            <th class="text-center">社員番号</th>
            <th class="text-center">名前</th>
            <th class="text-center">メールアドレス</th>
            <th class="text-center">管理者フラグ</th>
            <th class="text-center">失効フラグ</th>
        </tr>

        @foreach ($users as $user)
            <tr>
                <td class="text-center"><a href="{{ route('users.show', $user->id) }}">{{$user->id}}</a></td>
                <td class="text-center">{{$user->employee_number}}</td>
                <td class="text-center">{{$user->family_name}} {{$user->first_name}}</td>
                <td class="text-center">{{$user->email}}</td>
                <td class="text-center">{{ $user->is_admin == 1 ? 'Yes' : '' }}</td>
                <td class="text-center">{{ empty($user->deleted_at) ? '' : 'Yes' }}</td>
            </tr>
        @endforeach

    </table>

@endsection