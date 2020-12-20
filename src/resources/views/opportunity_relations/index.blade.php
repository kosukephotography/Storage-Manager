@extends('layouts.app')

@section('content')

    <div class="m-4">
        <form>
            <div class="form-group row">
                <label class="col-2 col-form-label">ストレージID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">SF案件ID</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label">無効化フラグ</label>
                <div class="col-10">
                    <select class="form-control">
                        <option>どちらも</option>
                        <option>0</option>
                        <option>1</option>
                    </select>
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



        <table class="table table-hover">
            <tr class="bg-secondary text-light">
                <th class="text-center">ID</th>
                <th class="text-center">ストレージID</th>
                <th class="text-center">SF案件ID</th>
                <th class="text-center">無効化フラグ</th>
            </tr>

            @for ($i = 0; $i < 25; $i++)
                <tr>
                    <td class="text-center"><a href="/opportunity_relations/0">{{$i}}</a></td>
                    <td class="text-center">ST000001</td>
                    <td class="text-center">PR123456789</td>
                    <td class="text-center">0</td>
                </tr>
            @endfor

        </table>

@endsection