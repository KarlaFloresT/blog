@extends('layouts.app')

@section('content')
    <h1 class="text-center">Mensaje id: {{$message->id}}</h1>
    <div class="row">
        <div class="col-6">
            <img src="{{$message->image}}" alt="" style="width: 100%">
        </div>
        <div class="col-6">
            <span class="text-muted">Escrito por: <a href="/{{$message->user->username}}">{{$message->user->name}}</a></span>
            <p>
                {{$message->content}}
            </p>
            <small class="mt-2 text-muted">{{$message->created_at}}</small>            
        </div>
    </div>
@endsection