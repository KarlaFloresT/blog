@extends('layouts.app')

@section('content')
    <div class="row">
        <form action="/messages/create" method="post">
            <div class="mt-3 form-group @if($errors->has('message')) has-danger @endif">
                {{ csrf_field() }}
                <input type="text" name="message" class="form-control" placeholder="Qué estás pensando?">
                @if ($errors->has('message'))
                    @foreach ($errors->get('message') as $error)
                    <div class="form-control-feedback">{{ $error }}</div>
                    @endforeach
                @endif
            </div>
        </form>
    </div>
    <div class="row">
        @forelse($messages as $message)
            <div class="col-3">
                @include('messages.message')
            </div>
        @empty
            <p>No hay mensajes destacados.</p>
        @endforelse

        @if(count($messages))
            <div class="mt-2 mx-auto">
                {{$messages->links()}}
            </div>
        @endif
    </div>
@endsection