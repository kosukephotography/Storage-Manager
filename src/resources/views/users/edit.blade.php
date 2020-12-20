@extends('layouts.app')

@section('content')

<div class="m-4">
        <form>
            <div class="form-group row">
                <label class="col-2 col-form-label">社員番号</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">性</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">名</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">メールアドレス</label>
                <div class="col-10">
                    <input type="email" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">管理者フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">失効フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>0</option>
                        <option>1</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">変更</button>
            </div>
        </form>
    </div>








@endsection