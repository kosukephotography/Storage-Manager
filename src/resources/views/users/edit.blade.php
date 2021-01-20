@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $user->id }} のユーザー編集ページ</h1>

    <div class="m-4">
        <form action="{{ route('users.update', $user->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="employee_number">社員番号</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="employee_number" value="{{ $user->employee_number }}" id ="employee_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="email">メールアドレス</label>
                <div class="col-10">
                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" id="email">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="family_name">姓</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="family_name" value="{{ $user->family_name }}" id="family_name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="first_name">名</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" id="first_name">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="is_admin">管理者フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="is_admin" id="is_admin">
                        <option value="1" {{ $user->is_admin === 1 ? 'selected' : '' }}>有効</option>
                        <option value="0" {{ $user->is_admin === 0 ? 'selected' : '' }}>無効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">失効フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at">
                        <option value="1" {{ isset($user->deleted_at) ? 'selected' : '' }}>有効</option>
                        <option value="0" {{ !isset($user->deleted_at) ? 'selected' : '' }}>無効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <div class="row">
            <a href="{{ route('users.show', $user->id) }}" class="btn btn-info col-12">戻る</a>
        </div>
    </div>

@endsection