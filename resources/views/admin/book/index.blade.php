<?php
use App\Common;
?>

@extends ('layout.app')
@section('content')

	<!-- Bootstrap Boilerplate... -->

		<h1> Book List </h1>
		<div class="panel-body">
			@if (count($books) > 0)
			 <table class="table table-striped task-table" border="1" width="100%"
					style="border-collapse:collapse;font-family:Arial;">
			<!-- Table Headings -->
			<thead>
			<a href="{{ url('/admin') }}">Admin Home Page  </a>
			<a>  |  </a>
			<a href="{{ url('/book/create') }}"> Add New Book</a>
			<br>
				<tr>
				 <th>No.</th>
				 <th>Title</th>
				 <th>Category</th>
         <th>Created At</th>
         <th>Updated At</th>
				 <th colspan="2">Actions</th>
				 </tr>
				 </thead>

			<!-- Table Body -->
			<tbody>
			 @foreach ($books as $i => $book)


			 <tr>
				 <td class="table-text">
				 <div>{{ $i+1 }}</div>
			 </td>
			  <td class="table-text">
				 <div>{{ $book->title }}</div>
			 </td>

			 <td class="table-text">
				 <div>{{ $book->category }}</div>
			 </td>
			 <td class="table-text">
				 <div>{{ $book->created_at }}</div>
			 </td>
       <td class="table-text">
        <div>{{ $book->updated_at }}</div>
      </td>
			 <td class="table-text">
				 <div>
				 {!! link_to_route( 'book.edit',
									 $title = 'Edit',
									 $parameters = ['id' => $book->id, ]
				  ) !!}

				 </div>
			 </td>
			 <td class="table-text">

				<div>

				{!! Form::open(['method' => 'DELETE',
								'route' => ['book.destroy',
								$book->id],
								'onsubmit' => 'return confirm("Are you sure ?")']
				) !!}

				{!! Form::submit('Delete',
								['class' => 'btn btn-danger']
				) !!}

				{!! Form::close()
				!!}
				</div>

			  </td>
			 </tr>
			 @endforeach

			 </tbody>
		 </table>


		@else
		<div>
			<a href="{{ url('/book/create') }}">Add New Book</a>
			<br><br>
			 No records found
		 </div>
		@endif

		</div>
 @endsection
