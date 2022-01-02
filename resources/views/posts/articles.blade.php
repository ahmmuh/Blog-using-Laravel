@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">
    <div class="col-8">
            <h2>  
     Articles...

    </h2>

    @foreach ($posts as $post)
    <div class="row d-flex justify-content-lg-between mb-2">
   <div class="card" >
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->description}}</p>
    <a href={{$post->id}}" class="btn btn-primary" value={{$post->id}}>Läs mer</a>
  </div>
</div>
    </div>


    @endforeach
    </div>
</div>
</div>
@endsection