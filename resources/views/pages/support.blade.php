@extends('app')

@section('title')
  Support Page
@stop

@section('content')
	<div class="row">
	  <div class="col-sm-7">
	    @include('partials.buttons')
	  </div>
	  <div class="col-sm-5">
	    @include('partials.email-signup')
	  </div>
	</div>
	@if (Auth::check())
		<a href="{{ route('supports.create') }}" class="btn btn-default">Add Support Block</a>
	@endif
	@if (count($supportitems))
		@foreach ($supportitems as $support)
			<div class="row">
				<div class="col-sm-12">
					{!! Form::open(['route' => ['supports.destroy', $support->id], 'method' => 'delete', 'id'=>'destroy']) !!}
					{!! Form::close() !!}
					<h3>
					{{ $support->header }}
					@if (Auth::check())
					  &nbsp;&nbsp;
					  |&nbsp;&nbsp;&nbsp;<a href="{{ route('supports.edit', $support->id) }}" class="btn btn-default">Edit</a>
					  &nbsp;&nbsp;
					  |&nbsp;&nbsp;&nbsp;{!! Form::submit('Delete', ['form'=>'destroy']) !!}
					@endif
					</h3>
					<p>{{ $support->body }}</p>
				</div>
			</div>
		@endforeach
	@endif
	<br />
	<div class="row">
		<div class="col-sm-12">
			@include('partials.wishlist')
		</div>
	</div>
@stop

@section('footer')
  @include('partials.footer')
@stop