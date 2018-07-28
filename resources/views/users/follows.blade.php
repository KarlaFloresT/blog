@extends('layouts.app')

@section('content')
    <div style="display: flex;" class="mt-3">
        <img src="{{$user->avatar}}" alt="" style="width: 100px; height: 100px; border-radius: 50%;">
        <h1 style="font-family: 'Limelight', cursive; display: flex; justify-content: center; align-content: center; flex-direction: column;" class="ml-3">
            {{$user->name}}
        </h1>
    </div>
    <div class="mt-3">
        @foreach($follows as $follow)
            <li style="display: flex; justify-content: center; align-content: center; flex-direction: column;" class="ml-3">{{$follow->username}}</li>          
        @endforeach
    </div>
@endsection