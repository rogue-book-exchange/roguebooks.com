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
          @if (array_key_exists('body-intro-1', $page))
            @if (Auth::check())
              {!! Form::textarea('body-intro-1', $page['body-intro-1'], ['rows'=>'4', 'form'=>'page-update']) !!}
            @else
              <p class="double-space">{{ $page['body-intro-1'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          @if (array_key_exists('hours-header', $page) && array_key_exists('hours-body', $page))
            @if (Auth::check())
              {!! Form::text('hours-header', $page['hours-header'], ['rows'=>'1', 'form'=>'page-update']) !!}
              {!! Form::textarea('hours-body', $page['hours-body'], ['rows'=>'3', 'form'=>'page-update']) !!}
            @else
              <h3>{{ $page['hours-header'] }}</h3>
              <p>{{ $page['hours-body'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          @if (array_key_exists('body-intro-2', $page))
            @if (Auth::check())
              {!! Form::textarea('body-intro-2', $page['body-intro-2'], ['rows'=>'6', 'form'=>'page-update']) !!}
            @else
              <p class="double-space">{{ $page['body-intro-2'] }}</p>
            @endif
          @endif
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      @include('partials.email-signup')
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              @if (array_key_exists('wish-list', $page))
                @if (Auth::check())
                  {!! Form::text('wish-list', $page['wish-list'], ['rows'=>'1', 'form'=>'page-update']) !!}
                @else
                  <h2>{{ $page['wish-list'] }}</h2>
                @endif
              @endif
            </div>
          </div>
        </div>
        <div class="panel-body">
          @if (array_key_exists('wish-list-body', $page))
            @if (Auth::check())
              {!! Form::textarea('wish-list-body', $page['wish-list-body'], ['rows'=>'9', 'form'=>'page-update']) !!}
            @else
              <p>{{ $page['wish-list-body'] }}</p>
            @endif
          @endif
          @if (Auth::check())
            {!! Form::open() !!}
            <!-- Name of item  -->
            <div class="form-group">
              {!! Form::label('name', 'Item Name:') !!}
              {!! Form::text('name', null) !!}
            </div>
            <!-- Button for submission  -->
            <div class="form-group">
              {!! Form::submit('Add Item', ['class' => 'btn btn-default form-control']) !!}
            </div>
          {!! Form::close() !!}
          @endif
        </div>
      </div>
      @include('partials.maps', array('visibility' => 'visible-lg'))
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      @include('partials.maps', array('visibility' => 'hidden-lg'))
    </div>
  </div>
@endsection

@section('footer')
  @include('partials.footer')
@stop