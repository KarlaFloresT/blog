@extends('layouts.app')

@section('content')
    <h1 class="text-center mt-3" style="font-family: 'Limelight', cursive;">{{ $user->name }}</h1>

    <a href="{{$user->username}}/follows" class="btn btn-link">
        Sigue a: <span class="badge badge-info">{{$user->follows->count()}}</span>
    </a>
    <a href="/{{$user->username}}/followers" class="btn btn-link">
        Seguidores: <span class="badge badge-info"> {{$user->followers->count()}}</span>
    </a>

    @if(Auth::check())

        @if(Gate::allows('dms', $user))
            <form action="/ {{$user->username}}/dms" method="POST">
                {{csrf_field()}}
                <input type="text" name="message" class="form-control">
                <button type="submit" class="btn btn-outline-success">Enviar MP</button>
            </form>
        @endif
        @if(Auth::user()->isFollowing($user))
            <form action="/{{$user->username}}/unfollow" method="POST">
                {{csrf_field()}}
                @if(session('success'))
                    <span class="text-success">{{session('success')}}</span>
                @endif
                <button class="btn btn-danger mt-2 mb-4 ml-auto">Dejar de seguir</button>
            </form>
        @else
            <form action="/{{$user->username}}/follow" method="POST">
                {{csrf_field()}}
                @if(session('success'))
                    <span class="text-success">{{session('success')}}</span>
                @endif
                <button class="btn btn-primary mt-2 mb-4 ml-auto">Seguir</button>
            </form>
        @endif
    @endif
    <div class="row">
        @foreach($user->messages as $message)
            <div class="col-3">
                @include('messages.message')
            </div>
        @endforeach
    </div>
@endsection