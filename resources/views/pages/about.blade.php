@extends('layouts.app')
@section('content')
    <div class="container pt-5">
        <h1>{{$title}}</h1>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3 pt-5">
                @if(count($abouts)>0)
                    @foreach ($abouts as $item)
                        <p>{{$item}}</p>
                    @endforeach
                @endif
            </div>
        </div>
    </div>
@endsection