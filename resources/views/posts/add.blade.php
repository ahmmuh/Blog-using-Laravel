@extends('layouts.app')
@section('content')
<div class="container   ">
  <div class="row  d-flex justify-content-center ">
      <div class="col-lg-8 bg-white  ">
            <h2>Add new article</h2>
   <form class=" mb-3" action="/posts/store" method="POST">
    @csrf
       <div class="form-group ">
           <input type="text" class="form-control bg-white" placeholder="Title"
           name="title" id="title">
       </div>
    
       <div class="form-group">
           <textarea id="description" class="form-control bg-white" name="description" rows="5" 
           placeholder="Description"></textarea>
       </div>

              <div class="form-group">
           <input type="text" class="form-control bg-white" placeholder="author"
           name="author" id="author">
       </div>

       <button class="btn bg-warning mt-3" type="submit">Add new</button>
   </form>
      </div>
  </div>
</div>
@endsection