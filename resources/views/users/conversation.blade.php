@extends('layouts.app')

@section('content')
    <h3>Conversación con {{$conversation->users->except($user->id)->implode('name', ', ')}}</h3>

    <div class="card">
        @foreach($conversation->privateMessages as $message)
        <div class="card-header">
            <p>{{$message->user->name}} dijo...</p>
        </div>
        <div class="card-body">
            <p>{{$message->message}}</p>
        </div>
        <div class="card-footer">
            <p>{{$message->created_at}}</p>
        </div>
        @endforeach
    </div>
@endsection