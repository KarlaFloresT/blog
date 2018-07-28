@extends('layouts.app')

@section('content')
    <form method="POST" action="/auth/facebook/register">
        {{csrf_field()}}
        <div class="card">
            <div class="card-block">
                <img class="img-thumbnail" src="{{$user->avatar}}" alt="">
            </div>
            <div class="card-block">
                <label for="name" class="form-control-label">Nombre:</label>
                <input type="text" name="name" value="{{$user->name}}" readonly>
            </div>
            <div class="card-block">
                <label for="email" class="form-control-label">Correo electrónico:</label>
                <input type="text" name="email" value="{{$user->email}}" readonly>
            </div>
            <div class="card-block">
                <label for="username" class="form-control-label">Nombre de usuario:</label>
                <input type="text" name="username" value="{{old('username')}}">
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-outline-primary">Registrarse</button>
        </div>
    </form>
@endsection