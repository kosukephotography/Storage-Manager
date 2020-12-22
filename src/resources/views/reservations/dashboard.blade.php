@extends('layouts.app')

@section('content')

    <h1 class="text-center">予約一覧ページ</h1>

    <div class="m-4">
        <form>
        <div class="form-group row">
                <label class="col-2 col-form-label">検索開始日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">検索終了日</label>
                <div class="col-10">
                    <input type="date" class="form-control" name="">
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
                        <option>すべて</option>
                        <option>レンタル</option>
                        <option>ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">対応OS</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>すべて</option>
                        <option>Windows</option>
                        <option>Mac</option>
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
    </div>




@endsection