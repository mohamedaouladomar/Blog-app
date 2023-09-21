@extends('layouts.app') 

@section('content')

<div class="div1 container">
    <label class=" fw-bold fs-1 lab1">Create Posts</label>
</div>


    <form action="/blog" method="post" enctype="multipart/form-data">
        @csrf   
  
      <div class="divp">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title">
      </div>
  <br>
      <div>
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" style="height: 200px;">
      </div>
  <br>
      <div>
        <label for="image">Image:</label>
        <input type="file"  id="image" name="image">
      </div>
  <br>
      <button type="submit" >Submit The Post</button>
    </form>

  

@endsection

<style>
    .div1{
    text-align: center;
    margin-top: 45px;
    margin-bottom: 15px;
    
}
.lab1{
       font-family: Arial, Helvetica, sans-serif;
       font-size: 400px;

}
form {
  max-width: 600px;
  margin: 0 auto;
}

.divp {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 5px;
  font-weight: bold;
}

input[type="text"]
 {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
  font-size: 16px;
  font-family: Arial, sans-serif;
  box-sizing: border-box;
}

button[type="submit"] {
  background-color: #12840e;
  color: #fff;
  border: none;
  border-radius: 5px;
  padding: 10px 20px;
  font-size: 16px;
  font-weight: bold;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #ffffff;
  color: #12840e;
  transition: 0.5s;
}

</style>