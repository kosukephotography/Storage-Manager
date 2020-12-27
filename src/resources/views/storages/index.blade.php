@extends('layouts.app')

@section('content')

    <h1 class="text-center">ストレージ一覧ページ</h1>

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
                        <option>無効</option>
                        <option>有効</option>
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

    <table class="table table-hover">
        <tr class="bg-secondary text-light">
            <th class="text-center">ID</th>
            <th class="text-center">容量</th>
            <th class="text-center">種別</th>
            <th class="text-center">対応OS</th>
            <th class="text-center">抹消フラグ</th>
            <th class="text-center">関連案件ID</th>
        </tr>

        @for ($i = 0; $i < 10; $i++)
            <tr>
                <td class="text-center"><a href="/storages/{{$i}}">ST00000{{$i}}</a></td>
                <td class="text-center">2TB</td>
                <td class="text-center">レンタル</td>
                <td class="text-center">Windows</td>
                <td class="text-center">無効</td>
                <td class="text-center"></td>
            </tr>
        @endfor

        <tr>
            <td class="text-center"><a href="/storages/{{$i}}">ST000010</a></td>
            <td class="text-center">4TB</td>
            <td class="text-center">ライブラリ</td>
            <td class="text-center">Mac</td>
            <td class="text-center">無効</td>
            <td class="text-center">
                <ul>
                    <li>PR123456789</li>
                    <li>PR123456789</li>
                </ul>
            </td>
        </tr>

    </table>

@endsection