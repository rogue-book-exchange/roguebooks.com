<div class="row visible-xs">
  <div class="col-sm-6 text-center">
    <!-- Content from database -->
    @if (Auth::check())
      {!! Form::textarea('global-volunteer-text', $page['global-volunteer-text'], ['rows'=>'2', 'form'=>'page-update']) !!}
    @else
      @if (array_key_exists('global-volunteer-text', $page))
        <p>{{ $page['global-volunteer-text'] }}</p>
      @endif
    @endif
    <a href="volunteer" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
    <!-- end content from database -->
  </div>
  <br>
  <div class="col-sm-6 text-center">
    <!-- Content from database -->
    @if (Auth::check())
      {!! Form::textarea('global-donate-text', $page['global-donate-text'], ['rows'=>'2', 'form'=>'page-update']) !!}
    @else
      @if (array_key_exists('global-donate-text', $page))
        <p>{{ $page['global-donate-text'] }}</p>
      @endif
    @endif
    @include('partials.paypal')
    <!-- end content from database -->
  </div>
</div>
<div class="row hidden-xs">
  <div class="col-sm-6 text-center">
    <!-- Content from database -->
    @if (Auth::check())
      {!! Form::textarea('global-volunteer-text', $page['global-volunteer-text'], ['rows'=>'2', 'form'=>'page-update']) !!}
    @else
      @if (array_key_exists('global-volunteer-text', $page))
        <p>{{ $page['global-volunteer-text'] }}</p>
      @endif
    @endif
    <!-- end content from database -->
  </div>
  <div class="col-sm-6 text-center">
    <!-- Content from database -->
    @if (Auth::check())
      {!! Form::textarea('global-donate-text', $page['global-donate-text'], ['rows'=>'2', 'form'=>'page-update']) !!}
    @else
      @if (array_key_exists('global-donate-text', $page))
        <p>{{ $page['global-donate-text'] }}</p>
      @endif
    @endif
    <!-- end content from database -->
  </div>
</div>
<div class="row hidden-xs">
  <div class="col-sm-6 text-center">
    <a href="volunteer" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
  </div>
  <div class="col-sm-6 text-center">
    @include('partials.paypal')
  </div>
</div>
<br />