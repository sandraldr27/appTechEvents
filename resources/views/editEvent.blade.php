@extends('layouts.app')

@section('content')
<div class="containerCreate">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="cardTitle">Create a New Event</h2>
                    <form class="justify-content-center" action="{{ route('storeEvent') }}" method="post">
                        @csrf
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                            <input type="text" name="name"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event->name}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Space Max</span>
                            <input type="text" name="Space Max"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event->spaces}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                            <input type="text" name="description"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event->description}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                            <input type="text" name="img"  class="form-control subirFoto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event->img}}">
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="inputGroup-sizing-default">Date Time</span>
                            <input type="text" name="datetime"  class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$event->datetime}}">
                        </div>

                        <div class="float-rigth">
                            <a class="btn btn-primary" href="{{ route('home') }}">💾</a>
                        </div>

                        <div class="btnCreate">
                            <button type="submit" class="btn btn-outline-sucess" value="Create">Save</button>
                        </div>
                    </form>
            </div>
        </div> 
    </div>
</div>  
