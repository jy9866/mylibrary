<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')
<button type="button" onclick="window.location='{{ url("/bookindex") }}'">Book</button>
@endsection
