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
                <label class="col-2 col-form-label">名前</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
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
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>
    </div>



        <table class="table table-hover">
            <tr class="bg-secondary text-light">
                <th class="text-center">社員番号</th>
                <th class="text-center">性</th>
                <th class="text-center">名</th>
                <th class="text-center">管理者フラグ</th>
                <th class="text-center">失効フラグ</th>
            </tr>

            @for ($i = 0; $i < 25; $i++)
                <tr>
                    <td class="text-center"><a href="#">{{$i}}</a></td>
                    <td class="text-center">浦島</td>
                    <td class="text-center">太郎</td>
                    <td class="text-center">1</td>
                    <td class="text-center">0</td>
                </tr>
            @endfor

        </table>

@endsection