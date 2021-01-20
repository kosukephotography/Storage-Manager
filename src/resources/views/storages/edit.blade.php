@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $storage->id }} のストレージ編集ページ</h1>

    <div class="m-4">
        <form action="{{ route('storages.update', ['id' => $storage->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="maker">メーカー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="maker" value="{{ $storage->maker }}" id="maker">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="model_number">型番</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="model_number" value="{{ $storage->model_number }}" id="model_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="serial_number">シリアルナンバー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="serial_number" value="{{ $storage->serial_number }}" id="serial_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="size">容量</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="size" value="{{ $storage->size }}" id="size">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="types">種別</label>
                <div class="col-10">
                    <select class="form-control" name="types" id="types">
                        <option value="レンタル" {{ $storage->types === 'レンタル' ? 'selected' : '' }}>レンタル</option>
                        <option value="ライブラリ" {{ $storage->types === 'ライブラリ' ? 'selected' : '' }}>ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="supported_os">対応OS</label>
                <div class="col-10">
                    <select class="form-control" name="supported_os" id="supported_os">
                        <option value="Windows" {{ $storage->supported_os === 'Windows' ? 'selected' : '' }}>Windows</option>
                        <option value="Mac" {{ $storage->supported_os === 'Mac' ? 'selected' : '' }}>Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="recovery_key">復旧キー
</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="recovery_key" value="{{ $storage->recovery_key }}" id="recovery_key">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="password">パスワード
</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="password" value="{{ $storage->password }}" id="password">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at">
                        <option value="1" {{ isset($storage->deleted_at) ? 'selected' : '' }}>有効</option>
                        <option value="0" {{ !isset($storage->deleted_at) ? 'selected' : '' }}>無効</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">抹消理由</label>
                <div class="col-10">
                    <textarea class="form-control" rows="3" id="reason"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <div class="row">
            <a href="{{ route('storages.show', ['id' => $storage->id]) }}" class="btn btn-info col-12">戻る</a>
        </div>

    </div>
@endsection