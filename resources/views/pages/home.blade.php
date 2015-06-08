@extends('app')

@section('title')
Home Page
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-7">
      @include('partials.buttons')
      <div class="row">
        <div class="col-sm-12">
          @if (Auth::check())
            {!! Form::textarea('body-intro-1', $page['body-intro-1'], ['rows'=>'4', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('body-intro-1', $page))
              <p class="double-space">{{ $page['body-intro-1'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          @if (Auth::check())
            {!! Form::text('hours-header', $page['hours-header'], ['rows'=>'1', 'form'=>'page-update']) !!}
            {!! Form::textarea('hours-body', $page['hours-body'], ['rows'=>'3', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('hours-header', $page) && array_key_exists('hours-body', $page))
              <h3>{{ $page['hours-header'] }}</h3>
              <p>{{ $page['hours-body'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          @if (Auth::check())
            {!! Form::textarea('body-intro-2', $page['body-intro-2'], ['rows'=>'6', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('body-intro-2', $page))
              <p class="double-space">{{ $page['body-intro-2'] }}</p>
            @endif
          @endif
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      @include('partials.email-signup')
      @include('partials.wishlist')
      @include('partials.maps', ['visibility' => 'visible-lg'])
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      @include('partials.maps', ['visibility' => 'hidden-lg'])
    </div>
  </div>
@endsection

@section('footer')
  @include('partials.footer')
@stop