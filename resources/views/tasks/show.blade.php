@extends('layouts.app')

@section('content')
    <h1>id = {{ $item->id }} のメッセージ詳細ページ</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $item->id }}</td>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $item->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'このメッセージを編集', ['task' => $item->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($item, ['route' => ['tasks.destroy', $item->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

    @endsection
