@extends('app')

@section('title')
Home Page
@endsection

@section('content')
  {!! Form::open(array('name'=>'page-form')) !!}
  {!! Form::close() !!}
  <div class="row">
    <div class="col-sm-7">
      <div class="row visible-xs">
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          @if (array_key_exists('volunteer-text', $page))
            @if (Auth::check())
              {!! Form::textarea('volunteer-text', $page['volunteer-text'], array('rows'=>'2', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['volunteer-text'] }}</p>
            @endif
          @endif
          <a href="forms/signup" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
          <!-- end content from database -->
        </div>
        <br>
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          @if (array_key_exists('donate-text', $page))
            @if (Auth::check())
              {!! Form::textarea('donate-text', $page['donate-text'], array('rows'=>'2', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['donate-text'] }}</p>
            @endif
          @endif
          @include('partials.paypal')
          <!-- end content from database -->
        </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          @if (array_key_exists('volunteer-text', $page))
            @if (Auth::check())
              {!! Form::textarea('volunteer-text', $page['volunteer-text'], array('rows'=>'2', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['volunteer-text'] }}</p>
            @endif
          @endif
          <!-- end content from database -->
        </div>
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          @if (array_key_exists('donate-text', $page))
            @if (Auth::check())
              {!! Form::textarea('donate-text', $page['donate-text'], array('rows'=>'2', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['donate-text'] }}</p>
            @endif
          @endif
          <!-- end content from database -->
        </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-sm-6 text-center">
          <a href="forms/signup" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
        </div>
        <div class="col-sm-6 text-center">
          @include('partials.paypal')
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          @if (array_key_exists('body-intro-1', $page))
            @if (Auth::check())
              {!! Form::textarea('body-intro-1', $page['body-intro-1'], array('rows'=>'4', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['body-intro-1'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          @if (array_key_exists('hours-header', $page) && array_key_exists('hours-body', $page))
            @if (Auth::check())
              {!! Form::textarea('hours-header', $page['hours-header'], array('rows'=>'1', 'for'=>'page-form')) !!}
              {!! Form::textarea('hours-body', $page['hours-body'], array('rows'=>'3', 'for'=>'page-form')) !!}
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
              {!! Form::textarea('body-intro-2', $page['body-intro-2'], array('rows'=>'6', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['body-intro-2'] }}</p>
            @endif
          @endif
        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              @if (array_key_exists('wish-list', $page))
                @if (Auth::check())
                  {!! Form::textarea('wish-list', $page['wish-list'], array('rows'=>'1', 'for'=>'page-form')) !!}
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
              {!! Form::textarea('wish-list-body', $page['wish-list-body'], array('rows'=>'9', 'for'=>'page-form')) !!}
            @else
              <p>{{ $page['wish-list-body'] }}</p>
            @endif
          @endif
          <!-- <ul>
            <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
            <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
            <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
          </ul> -->
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              @if (array_key_exists('new-on-amazon', $page))
                @if (Auth::check())
                  {!! Form::textarea('new-on-amazon', $page['new-on-amazon'], array('rows'=>'1','for'=>'page-form')) !!}
                @else
                  <h2>{{ $page['new-on-amazon'] }}</h2>
                @endif
              @endif
            </div>
          </div>
        </div>
        <div class="panel-body">
          <ul>
            <li>Morbi in sem quis dui placerat ornare.</li>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.</li>
            <li>Phasellus ultrices nulla quis nibh.</li>
            <li>Pellentesque fermentum dolor. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection