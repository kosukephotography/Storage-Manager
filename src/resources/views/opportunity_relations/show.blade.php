@extends('layouts.app')

@section('content')

    <h1 class="text-center">ID = {{ $opportunity_relations->id }} の関連案件情報 詳細ページ</h1>

    <div class="m-4">
        <table class="table table-bordered">
            <tr>
                <th class="text-center bg-secondary text-light">ID</th>
                <td>{{ $opportunity_relations->id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">ストレージID</th>
                <td>{{ $opportunity_relations->storage_id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">SF案件ID</th>
                <td>{{ $opportunity_relations->opportunity_id }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">抹消フラグ</th>
                <td>{{ $opportunity_relations->deleted_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成日時</th>
                <td>{{ $opportunity_relations->created_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">作成者</th>
                <td>{{ $opportunity_relations->createdByUser->full_name }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新日時</th>
                <td>{{ $opportunity_relations->updated_at }}</td>
            </tr>
            <tr>
                <th class="text-center bg-secondary text-light">最終更新者</th>
                <td>{{ $opportunity_relations->updatedByUser->full_name }}</td>
            </tr>
        </table>
    </div>

    @if(Auth::user()->is_admin == 1)
        <div class="m-4">
            <a href="{{ route('opportunity_relations.edit', ['id' => $opportunity_relations->id]) }}" class="btn btn-primary col-12">編集</a>
        </div>
    @endif

@endsection