@extends('app')

@section('title')
  Edit Support Block
@stop

@section('content')
  <div class="row">
    <h1>Edit Support Block</h1>
    <hr />
    <div class="col-sm-12 text-center">
    {!! Form::model($support, ['route' => ['supports.update', $support->id], 'method' => 'patch']) !!}

    @include('supports._form', ['submitButtonText' => 'Update Support Block'])  

    {!! Form::close() !!}
    </div>
  </div>
@stop
