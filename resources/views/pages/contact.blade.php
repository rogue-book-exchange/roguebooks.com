@extends('app')

@section('title')
	Contact Us
@stop

@section('content')
	<div class="row">
		<h1>{{ $contents[0]->heading1 }}</h1>
		<!-- @foreach ($contents as $content)
			@if ($content->group_id == 1)
					<div class="col-sm-4">
						<h1>{{ $content->heading1 }}</h1>
						<h4>{{ $content->heading2 }}</h4>
						<blockquote>{{ $content->body }}</blockquote>
					</div>
			@endif
			@if ($content->group_id == 2)
					<div class="col-sm-6 col-sm-offset-6">
						<h1>{{ $content->heading1 }}</h1>
						<p>{{ $content->body }}</p>
					</div>
			@endif

		@endforeach -->
	</div>
@stop