@extends('layouts.app')

@section('content')

@if (session()->has('message'))
<div class="alert alert-success" role="alert">
    {{ session()->get('message') }}
</div>
@endif
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <h2 class="text-center mb-3">{{ $post->title }}</h2>
            <p class="small text-center mb-5" style="color: black">By: <span style="font-weight: bold;color:black">{{ $post->User->name }}</span>,
                On: <span style="font-weight: bold;color:black"> {{ date('d-m-Y', strtotime($post->updated_at)) }}</span>
            </p>
            <div class="text-center mb-5">
                <img src="/image/{{ $post->image }}" alt="" class="img-fluid rounded-lg w-75">
            </div>
            <div class="text-center">
                <p class="lead">{{ $post->description }}</p>
            </div>
        </div>
      
        @if (Auth::user() && Auth::user()->id == $post->user_id)
        <div class="col-lg-12 text-center">
            <a href="/blog/{{ $post->title }}/edit" class=" a1">Edit Post</a>

            <form action="/blog/{{ $post->title }}" method="post" style="display: inline-block;">
                @csrf
                @method('delete')

                <button type="submit" class=" butt">Delete Post</button>
            </form>
        </div>
        @endif

        @if (Auth::user())
        <div class="col-lg-12 mt-5">
            <form method="post" action="{{ route('comments.store', $post->id) }}">
                @csrf
                <div class="form-group">
                    <label for="comment" style="font-weight: bold;">Add Comments</label>
                    <textarea class="form-control" id="comment" name="body" rows="5"></textarea>
                </div><br>
                <button type="submit" class="btn btn-primary">Add Comment</button>
            </form>
            <hr>
            <label for="comment" style="font-weight: bold;">All Comments</label>
           
        </div>
        @endif
    </div>
    
</div>
@endsection


<style>
  .a1 {
  display: inline-block;
  padding: 12px 20px;
  background-color: #17730b;
  color: #fff;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  width: 640px;
}

.a1:hover {
  background-color: #f5f5f5;
  color: #17730b;
  font-weight: bold;
}


.butt {
  
  padding: 12px 20px;
  background-color: #c81006;
  color: #fff;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  border: none;
  width: 640px;
  margin-top: 20px;

}

.butt:hover {
  background-color: #f5f5f5;
  color: #c81006;
  font-weight: bold;
}
</style>

