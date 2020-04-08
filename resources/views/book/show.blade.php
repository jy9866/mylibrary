<style>
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
p.a{
  text-align: left;
  font-size: 20px;
}
</style>

@extends('layout.front')

@section('title','BookShowPage')

@section('content')
<div class="container">
<div style="text-align:center">
  <h2>{{$book->title}}</h2>
</div>
<div class="row">
  <div class="column">
    <img src="data:image/jpeg;base64,<?php echo base64_encode( $book -> image ); ?>" style="width:60% ;height:auto" >
    <br></br>
  </div>
  <div class="column" style="border-left-style: solid">
      <p class="a"> Category : {{$book->category}}</p>
      <p class="a"> Status : {{$book->status}}</p>
      <p class="a"> Edition : {{$book->edition}}</p>
      <p class="a"> Year : {{$book->year}}</p>
      <p class="a"> Publisher Name : {{$book->publisher ->name}}</p>
      <p class="a"> Publisher Address : {{$book->publisher->address}}</p>
      <p class="a"> Publisher Email : {{$book->publisher->email}}</p>
<<<<<<< HEAD
      <p class="a"> Author Name : {{$book->authors->name}}</p>
=======
      @foreach($authors as $author)
      <p class="a"> Author Name : {{$author->name}}</p>
      @endforeach

>>>>>>> 4e1a94b248918074144ed6a1bd04b99693a51c25
  </div>
</div>
</div>

@endsection
