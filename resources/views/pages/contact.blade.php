@extends('app')

@section('content')

@if(Session::has('message'))
  <div class="alert alert-info">
    {{Session::get('message')}}
  </div>
@endif

@if($errors->all())
<div class="row">
  <div class="col-sm-12">
    <div class="panel panel-danger">
      <div class="panel-body">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</div>
@endif

<div>
  <h3>Contact</h3>
  <p>Please fill out the following form with any questions or comments.</p>
  {!! Form::open(['route' => 'contact_store']) !!}
    {!! Form::text('name', null, ['placeholder'=>'Name']) !!}
    {!! Form::email('email',null, ['placeholder'=>'Email Address']) !!}
    {!! Form::textarea('message', null, ['placeholder'=>'Your Message']) !!}
    {!! Form::submit('Send') !!}
  {!! Form::close() !!}
</div>                    


@stop

@section('footer')
  @include('partials.footer')
@stop