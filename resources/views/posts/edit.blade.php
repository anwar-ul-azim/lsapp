@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <P>Edit Posts:</P>
        {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', $post->body, ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary btn-sm'])}}
        {!! Form::close() !!}
    </div>
@endsection