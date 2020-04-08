<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')
<button type="button" onclick="window.location='{{ url("/bookindex") }}'">Book</button>
<button type="button" onclick="window.location='{{ url("/publisherindex") }}'">Publsiher</button>
<button type="button" onclick="window.location='{{ url("/authorindex") }}'">Author</button>
@endsection
