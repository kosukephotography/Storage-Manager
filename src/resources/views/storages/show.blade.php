@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $storage->id }} のストレージ詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>{{ $storage->id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">メーカー</th>
                <td>{{ $storage->maker }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">型番</th>
                <td>{{ $storage->model_number }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">シリアルナンバー</th>
                <td>{{ $storage->serial_number }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">容量</th>
                <td>{{ $storage->size }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">種別</th>
                <td>{{ $storage->types }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">対応OS</th>
                <td>{{ $storage->supported_os }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">復旧キー</th>
                <td>{{ $storage->recovery_key }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">パスワード</th>
                <td>{{ $storage->password }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">抹消フラグ</th>
                <td>{{ $storage->deleted_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">抹消理由</th>
                <td>{{ $storage->reason }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日</th>
                <td>{{ $storage->created_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>{{ $storage->createdByUser->full_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日</th>
                <td>{{ $storage->updated_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>{{ $storage->updatedByUser->full_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">関連案件ID</th>
                <td>
                    @foreach ($storage->opportunityRelations as $opportunityRelation)
                        @if ($loop->first)
                            <ul>
                        @endif
                        <li class="text-left">{{ $opportunityRelation->opportunity_id }}</li>
                        @if ($loop->last)
                            </ul>
                        @endif
                    @endforeach
                </td>
            </tr>
        </table>
    </div>

    <div class="m-4">
        <a href="{{ route('storages.edit', $storage->id) }}" class="btn btn-primary col-12">編集</a>
    </div>

@endsection