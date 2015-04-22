@extends('app')

@section('title')
	About
@stop

@section('content')
	@foreach ($contents as $content)
		@if ($content->group_id == 1)
			<h1>{{ $content->heading1 }}</h1>
			<h3>{{ $content->heading2 }}</h3>
			<p>{{ $content->body }}</p>
		@endif
	@endforeach
@stop