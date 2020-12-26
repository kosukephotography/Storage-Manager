@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = N のストレージ編集ページ</h1>

    <div class="m-4">
        <form action="/storages/0" method="get">
            <div class="form-group row">
                <label class="col-2 col-form-label">メーカー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">型番</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">容量</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">シリアルナンバー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">種別</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>レンタル</option>
                        <option>リース</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">対応OS</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>Windows</option>
                        <option>Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">復旧キー</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">パスワード</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option></option>
                        <option>抹消済</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">抹消理由</label>
                <div class="col-10">
                    <textarea class="form-control" rows="3"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>

        <form action="/storages/0" method="get">
            <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">戻る</button>
            </div>
        </form>

    </div>






@endsection