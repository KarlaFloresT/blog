{{-- <img src="{{$message->image}}" alt="" style="width: 100%">
<span class="text-muted">Escrito por: <a href="/{{$message->user->username}}">{{$message->user->name}}</a></span>
<p>
    {{$message->content}}                    
</p>
<a href="/messages/{{$message->id}}">Leer más...</a>
<div class="text-muted float-right">
	{{ $message->created_at }}
</div> --}}

<div class="card border-success mb-3" style="max-width: 18rem;">
    <div class="card-header bg-transparent border-success">
        <span class="text-muted">Escrito por: <a href="/{{$message->user->username}}">{{$message->user->name}}</a></span>
    </div>
    <div class="card-body text-success">
      {{-- <h5 class="card-title">Success card title</h5> --}}
      <img src="{{$message->image}}" alt="" style="width: 100%">
      <p class="card-text">
        {{$message->content}} 
      </p>
      <a href="/messages/{{$message->id}}">Leer más...</a>
    </div>
    <div class="card-footer bg-transparent border-success">{{ $message->created_at }}</div>
  </div>