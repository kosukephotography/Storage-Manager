@extends('layouts.app')

@section('content')

    <h1 class="text-center">ストレージ一覧ページ</h1>

    <div class="m-4">
        <form action="{{ route('storages.search') }}" method="post">
            @csrf
            <div class="form-group row">
                <label class="col-2 col-form-label" for="size">容量</label>
                <div class="col-10">
                    <input type="text" class="form-control" name="size" id="size" value="{{ $size }}">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="types">種別</label>
                <div class="col-10">
                    <select class="form-control" name="types" id="types">
                        <option></option>
                        <option value="レンタル" {{ $types === 'レンタル' ? 'selected' : '' }}>レンタル</option>
                        <option value="ライブラリ" {{ $types === 'ライブラリ' ? 'selected' : '' }}>ライブラリ</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="supported_os">対応OS</label>
                <div class="col-10">
                    <select class="form-control" name="supported_os" id="supported_os">
                        <option></option>
                        <option value="Windows" {{ $supported_os === 'Windows' ? 'selected' : '' }}>Windows</option>
                        <option value="Mac" {{ $supported_os === 'Mac' ? 'selected' : '' }}>Mac</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label class="col-2 col-form-label" for="deleted_at">抹消フラグ</label>
                <div class="col-10">
                    <select class="form-control" name="deleted_at" id="deleted_at">
                        <option></option>
                        <option value="1" {{ $deleted_at === '1' ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ $deleted_at === '0' ? 'selected' : '' }}>No</option>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <button type="submit" class="btn btn-primary col-12">検索</button>
            </div>
        </form>
        <form action="{{ route('storages.csv') }}" method="post">
            @csrf
            <input type="hidden" name="size" value="{{$size}}">
            <input type="hidden" name="types" value="{{$types}}">
            <input type="hidden" name="supported_os" value="{{$supported_os}}">
            <input type="hidden" name="deleted_at" value="{{$deleted_at}}">
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
        </tr>

        @foreach ($storages as $storage)
            <tr>
                <td class="text-center"><a href="{{ route('storages.show', ['id' => $storage->id]) }}">{{$storage->id}}</a></td>
                <td class="text-center">{{$storage->size}}</td>
                <td class="text-center">{{$storage->types}}</td>
                <td class="text-center">{{$storage->supported_os}}</td>
                <td class="text-center">{{ empty($storage->deleted_at) ? '' : 'Yes' }}</td>
            </tr>
        @endforeach

    </table>

@endsection