@extends('layouts.app')

@section('content')

    <div class= "text-center">
        <img class="img-thumbnail" src="{{ $event->img}}" alt="">
        <div>
            <h2>{{ $event->name }}</h2>
            <h2>{{ $event->spaces }} plazas</h2>
            <h2>{{ $event->description }}</h2>
            <h2>{{ $event->datetime }}</h2>
        </div>
        <div class="float-rigth"> 
            <a class="btn btn-primary" href="{{ route('home') }}">↩️</a>
        </div>
    </div>

@endsection