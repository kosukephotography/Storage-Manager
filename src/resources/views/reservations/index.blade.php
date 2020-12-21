@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約一覧ページ</h1>

    <div class="m-4">
        <form>
            <div class="form-group row">
                <label class="col-2 col-form-label">ID</label>
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
                <label class="col-2 col-form-label">種別</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>どちらも</option>
                        <option>レンタル</option>
                        <option>ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">対応OS</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>どちらも</option>
                        <option>Windows</option>
                        <option>Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>どちらも</option>
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">関連案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>
        <form>
        <div class="form-group row">
                <button type="submit" class="btn btn-info col-12">検索結果をcsv出力</button>
            </div>
        </form>

    </div>



@endsection