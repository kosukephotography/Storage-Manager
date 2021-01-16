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

        @foreach ($storages as $storage)
            <tr>
                <td class="text-center"><a href="{{ route('storages.show', $storage->id) }}">{{$storage->id}}</a></td>
                <td class="text-center">{{$storage->size}}</td>
                <td class="text-center">{{$storage->types}}</td>
                <td class="text-center">{{$storage->supported_os}}</td>
                <td class="text-center">{{ empty($storage->deleted_at) ? '' : 'Yes' }}</td>
                <td class="text-center">
                    @if (!empty($storage->opportunityRelations))
                        <ul>
                            @foreach ($storage->opportunityRelations as $opportunityRelation)
                                <li class="text-left">{{ $opportunityRelation->opportunity_id }}</li>
                            @endforeach
                        </ul>
                    @endif
                </td>
            </tr>
        @endforeach

    </table>

@endsection