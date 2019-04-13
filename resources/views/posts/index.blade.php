@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <P>Posts:</P>
        @if(count($posts)>0)
            @foreach ($posts as $post)
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <p>{{$post->created_at}} by {{ $post->user['name'] }}</p>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No Posts!!</p>
        @endif
    </div>
@endsection