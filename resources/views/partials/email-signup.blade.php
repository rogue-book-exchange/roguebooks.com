<div class="panel panel-success">
  <div class="panel-heading-border">
    <div class="panel-heading green-white-gradient">
      <div class="panel-title text-center">
        @if (Auth::check())
          {!! Form::text('global-subscribe-header', $page['global-subscribe-header'], ['rows'=>'1', 'form'=>'page-update']) !!}
        @else
          @if (array_key_exists('global-subscribe-header', $page))
            <h2>{{ $page['global-subscribe-header'] }}</h2>
          @endif
        @endif
      </div>
    </div>
  </div>
  <div class="panel-body text-center">
    {!! Form::open(['url'=>'emails']) !!}

      <div class="row">
        <div class="col-sm-7">
          {!! Form::text('email', null, ['placeholder'=>'email@example.com']) !!}
        </div>


        <div class="col-sm-4 col-sm-offset-1">
          {!! Form::submit('Subscribe', ['class'=>'btn btn-success btn-sm yellow-white-gradient pull-right']) !!}
        </div>
      </div>

    {!! Form::close() !!}
    
    @if(Session::has('emailSubscribe'))
		 <div class="row">
		 	<div class="col-sm-12">
		 		<div class="alert alert-success text-center">
		 		  {{Session::get('emailSubscribe')}}
		 		</div>
		 	</div>
		 </div>
		@endif
    
  </div>
</div>