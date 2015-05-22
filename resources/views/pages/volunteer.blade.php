@extends('app')

@section('title')
	Volunteers
@stop

@section('content')
	<h1>Volunteer</h1>

	

	<div class="col-sm-6 text-center">
          <!-- Content from database -->
          @if (array_key_exists('volunteer-text', $page))
            @if (Auth::check())
              {!! Form::textarea('volunteer-text', $page['volunteer-text'], ['rows'=>'2', 'form'=>'page-update']) !!}
            @else
              <p>{{ $page['volunteer-text'] }}</p>
            @endif
          @endif
          <a href="forms/signup" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
          <!-- end content from database -->
        </div>
@stop