@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <P>Create Posts:</P>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
            </div>
            <div class="form-group">
                {{Form::label('body', 'Body')}}
                {{Form::textarea('body', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
            </div>
            {{Form::submit('Submit', ['class'=>'btn btn-primary btn-sm'])}}
        {!! Form::close() !!}
    </div> 
@endsection