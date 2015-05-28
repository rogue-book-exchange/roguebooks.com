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
              <p>{{ $page['body-intro-2'] }}</p>
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
          {!! Form::open() !!}

            <!-- Name of item  -->
            <div class="form-group">
              {!! Form::label('ItemName', 'Item Name:') !!}
              {!! Form::text('ItemName', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Description of Item -->
            <div class="form-group">
              {!! form::label('ItemDescription', 'Item Description:') !!}
              {!! Form::text('ItemDescription', null, ['class' => 'form-control']) !!}
            </div>
            <!-- Button for submission  -->
            <div class="form-group">
              {!! Form::submit('Submit Materials', ['class' => 'btn btn-primary form-control']) !!}
            </div>
          {!! Form::close() !!}
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              @if (array_key_exists('google-maps', $page))
                @if (Auth::check())
                  {!! Form::text('google-maps', $page['google-maps'], ['rows'=>'1','form'=>'page-update']) !!}
                @else
                  <h2>{{ $page['google-maps'] }}</h2>
                @endif
              @endif
            </div>
          </div>
        </div>
        <div class="panel-body">
          <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=110+North+Ivy+Street,+Medford,+OR&amp;aq=0&amp;oq=110+N+Ivy+Street+Medfor&amp;sll=44.145447,-120.583402&amp;sspn=4.753569,11.634521&amp;ie=UTF8&amp;hq=&amp;hnear=110+N+Ivy+St,+Medford,+Oregon+97501&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=110+North+Ivy+Street,+Medford,+OR&amp;aq=0&amp;oq=110+N+Ivy+Street+Medfor&amp;sll=44.145447,-120.583402&amp;sspn=4.753569,11.634521&amp;ie=UTF8&amp;hq=&amp;hnear=110+N+Ivy+St,+Medford,+Oregon+97501&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('footer')
  @include('partials.footer')
@stop