@extends('layouts.app')

@section('content')
    <div>
        <button class="btn btn-primary">
            <a href="{{ route('createEvent') }}">
                <div class="text-warning">CREATE NEW EVENT</div>
            </a>
        </button>
    </div>
    <div class="d-flex flex-wrap row  justify-content-center my-4 px-xxl-5">
        @foreach ($events as $event)
            <div class="card" style="width: 18rem;"> 
                <a href="{{ route('showEvent', $event->id) }}">
                    <img src="{{ $event->img }}" class="card-img-top" alt="...">
                    </a>  
                <div class="card-body bg-dark">
                    <h5 class="card-title text-primary">{{ $event->name }}</h5>
                    <h5 class="card-title text-warning">{{ $event->spaces }} Plazas</h5>
                    <h5 class="card-title text-danger">{{ $event->datetime }}</h5>
                    <!-- <p class="card-text text-white">{{ $event->description }}</p> -->
                    <form action="{{ route('deleteEvent', ['id' => $event->id]) }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="bt-adm m-1 d-flex justify-content-center align-items-center" onclick="return confirm('¿Estás seguro de querer eliminar este evento? {{ $event->name }} - ID {{ $event->id }} ')">🚮</button>
                        <a class="bt-adm m-1 d-flex justify-content-center align-items-center" href="{{ route('editEvent', ['id' => $event->id]) }}">✏️</a>
                        
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endsection
