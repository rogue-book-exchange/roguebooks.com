<div class="panel panel-success">
  <div class="panel-heading-border">
    <div class="panel-heading green-white-gradient">
      <div class="panel-title text-center">
        @if (array_key_exists('global-subscribe-header', $page))
          @if (Auth::check())
            {!! Form::text('global-subscribe-header', $page['global-subscribe-header'], ['rows'=>'1', 'form'=>'page-update']) !!}
          @else
            <h2>{{ $page['global-subscribe-header'] }}</h2>
          @endif
        @endif
      </div>
    </div>
  </div>
  <div class="panel-body text-center">
    {!! Form::open() !!}
    {!! Form::text('email', null, ['placeholder'=>'bob@example.com']) !!}
    <br />
    {!! Form::submit('Subscribe', ['class'=>'btn btn-success yellow-white-gradient full-width']) !!}
    {!! Form::close() !!}
  </div>
</div>