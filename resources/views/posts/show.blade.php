@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <P>Posts:</P>
        @if($post!==NULL)
            <h1><a href="/posts/{{$post->id}}">{{$post->title}}</a></h1>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10"><small>{{$post->created_at}}</small></div>
            </div>
            <p>{!! $post->body !!}</p><hr>
            <div class="row">
                @if (!Auth::guest())
                    @if (Auth::user()->id == $post->user_id)
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-primary m-1">Edit</a>
                        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class'=>'btn btn-danger btn-sm m-1'])}}
                        {!! Form::close() !!}
                    @endif
                @endif
                <a href="/posts" class="btn btn-sm btn-dark m-1">Go Back</a>
            </div>
        @else
            <p>No Post!!</p>
        @endif
    </div>
@endsection