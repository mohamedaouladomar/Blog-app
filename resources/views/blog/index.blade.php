@extends('layouts.app') 

@section('content')

@if (session()->has('message'))
  <div class="alert alert-danger" role="alert">
    {{session()->get('message')}}
  </div>
@endif 

<div class="div1 container">
    <label class="fw-bold fs-1">All Posts</label>
</div>
<br>  

<form action="{{ route('blog.index') }}" method="GET" class="container mb-4">
  <div class="input-group">
      <input type="text" name="search" class="form-control" placeholder="Search for posts..." value="{{ $searchQuery }}">
      <button type="submit" class="btn btn-primary">Search</button>
  </div>
</form>



@if(Auth::check())
<div class="container border-bottom" style="padding: 15px;margin-top:20px;text-align:center">
    <a href="/blog/create" class="a2">Add New Post</a>
    <br>
</div>
@endif

<div class="container" style="margin-top:20px;">
    @foreach ($posts as $post)
    <div class="border-bottom mb-3" style="padding: 15px;">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-6 text-center div11">
                <img src="/image/{{$post -> image}}" alt="" class="">
            </div>
            <div class="col-md-6 div22 ">
                <h1 class="mt-3 text-dark font-bold"> {{$post -> title}}</h1>
                <p class="mt-2 p1">By : {{$post ->User->name}}
                    <span> , On : {{date('d-m-Y', $post -> Updated_at)}}</span>
                </p>
                <p class="p2">{{ \Illuminate\Support\Str::limit($post->description, 250, $end='...')}}</p>
                <a href="/blog/{{$post -> title}}" class="a1">Read More</a>
            </div>
        </div>
    </div>
    @endforeach
    <div class="container text-center" style="text-align: center">
      {{ $posts->links('vendor.pagination.bootstrap-4') }}
  </div>
  
</div>

@endsection


<style>
    .div11{
        
    }
    img{
    border-radius: 15px;
    height: 400px;
    width: 500px;
  }
  .p1{
    color: rgb(67, 67, 67);
    font-weight: bold
  }
  .p2{
    color: rgb(142, 142, 142)
  }
  .a1 {
  display: inline-block;
  padding: 12px 20px;
  background-color: #2a4fe2;
  color: #fff;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
}

.a1:hover {
  background-color: #f5f5f5;
  color: #2a4fe2;
  font-weight: bold;
}


.a2 {
  display: inline-block;
  padding: 12px 20px;
  background-color: #0d5d1a;
  color: #fff;
  font-size: 18px;
  text-align: center;
  text-decoration: none;
  border-radius: 4px;
  transition: background-color 0.3s ease;
  
}

.a2:hover {
  background-color: #f5f5f5;
  color: #0d5d1a;
  font-weight: bold;
}


.div1{
    text-align: center;
    margin-top: 45px;
    margin-bottom: 15px;
    
}
label{
       font-family: Arial, Helvetica, sans-serif;
       font-size: 400px;

}
</style>