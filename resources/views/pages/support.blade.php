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
	<div class="row">
	  <div class="col-sm-10 col-sm-offset-1">
	    @if (Auth::check())
	      {!! Form::textarea('support-header', $page['support-header'], ['rows'=>'7', 'form'=>'page-update']) !!}
	    @else
	      @if (array_key_exists('support-header', $page))
	        <p class="double-space">{{ $page['support-header'] }}</p>
	      @endif
	    @endif
	  </div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			@include('partials.wishlist')
		</div>
	</div>
@stop

@section('footer')
  @include('partials.footer')
@stop