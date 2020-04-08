<?php

use App\Common;

?>
@extends('layout.app')

@section('content')

	<!-- Bootstrap Boilerplate... -->


	<div class="panel-body" style="font-size:20px;">
	<button><a href="{{ url('/bookindex') }}">Return to Book List</a></button>
		{!! Form::model($book,['route' => ['book.store'],
								 'class' => 'form-horizontal']) !!}

			<div class="form-group_row">
				{!! Form::label('book-title','Title',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					{!! Form::text('title',null,[
						'id'		=> 'book-title',
						'class'		=> 'form-control',
						'maxlength' => 30,
					]) !!}
				<p>{{ $errors->getBag('default')->first('title') }}</p>
				</div>
			</div>
			<br>
      <!-- Category -->
			<div class="form-group row">
				{!! Form::label('book-category','Category',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					@foreach(Common::$categorys as $key => $val)
					{!! Form::radio('category',$key) !!} {{$val}}
					@endforeach
				<p>{{ $errors->getBag('default')->first('category') }}</p>
				</div>
			</div>
			<br></br>
			<div class="form-group_row">
				{!! Form::label('book-edition','edition',['class' => 'control-label col-sm-3',]) !!}
				<div class="col-sm-9">
					{!! Form::text('edition',null,[
						'id'		=> 'book-edition',
						'class'		=> 'form-control',
						'maxlength' => 6,
					]) !!}
					<p>{{ $errors->getBag('default')->first('edition') }}</p>
				</div>
			</div>
			<br>
      <div class="form-group_row">
        {!! Form::label('book-year','Year',['class' => 'control-label col-sm-3',]) !!}
        <div class="col-sm-9">
          {!! Form::text('year',null,[
            'id'		=> 'book-year',
            'class'		=> 'form-control',
            'maxlength' => 6,
          ]) !!}
          <p>{{ $errors->getBag('default')->first('year') }}</p>
        </div>
      </div>
      <br>

			<!-- Submit Button -->
			<div class="form-group_row">
				<div class="col-sm-offset-3 col-sm-6">
					{!! Form::button('Save',[
						'type'		=> 'submit',
						'class'		=> 'btn_btn-primary',
					]) !!}
				</div>
			</div>

			{!! Form::close() !!}
	</div>

@endsection
