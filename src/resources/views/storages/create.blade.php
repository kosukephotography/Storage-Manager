@extends('layouts.app')

@section('content')

    <h1 class="text-center">ストレージ新規作成ページ</h1>

    <div class="m-4">
        <form action="{{ route('storages.store') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="maker">メーカー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="maker" id="maker">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="model_number">型番</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="model_number" id="model_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="serial_number">シリアルナンバー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="serial_number" id="serial_number">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="size">容量</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="size" id="size">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="types">種別</label>
                <div class="col-10">
                    <select class="form-control" name="types" id="types">
                        <option value="レンタル">レンタル</option>
                        <option value="ライブラリ">ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="supported_os">対応OS</label>
                <div class="col-10">
                    <select class="form-control" name="supported_os" id="supported_os">
                        <option value="Windows">Windows</option>
                        <option value="Mac">Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="recovery_key">復旧キー
</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="recovery_key" id="recovery_key">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="password">パスワード
</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="password"  id="password">
                </div>
            </div>


            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">作成</button>
            </div>
        </form>
    </div>

@endsection