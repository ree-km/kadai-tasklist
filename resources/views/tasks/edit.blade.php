@extends('layouts.app')

@section('content')
    <h1>id: {{ $item->id }} のタスク編集ページ</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($item, ['route' => ['tasks.update', $item->id], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('status', 'status:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('更新', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
