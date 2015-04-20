@extends('app')

@section('content')
  <h1>Write what you have to donate (one item at a time)</h1>
  
  <hr/>
  
  {!! Form::open() !!}

  <!-- Name of item  -->
  <div class="form-group">
    {!! Form::label('ItemName', 'Item name:') !!}
    {!! Form::text('ItemName', null, ['class' => 'form-control']) !!}
    </div>

  <!-- Description of Item -->
  <div class="form-group">
    {!! form::label('ItemDescription', 'Item Description:') !!}
    {!! Form::text('ItemDescription', null, ['class' => 'form-control']) !!}
  </div>

<!-- Date to donate -->
<div class="form-group">
{!! Form::label('DateDonate', 'Date you can donate:') !!}
{!! Form::input('date', 'DateDonate', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
  
  <!-- Contact Info -->
  <div class="form-group">
    {!! Form::label('Name', 'Contact Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>  
  
<div class="form-group">
  {!! Form::label('PhoneNumber', 'Phone number:') !!}
  {!! Form::text('PnoneNumber', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('Email', 'Email:') !!}
  {!! Form::text('Email', null, ['class' => 'form-control']) !!}
</div>

<!-- Button for submission  -->
<div class="form-group">
  {!! Form::submit('Submit Materials', ['class' => 'btn btn-primary form-control']) !!}
</div>
  {!! Form::close() !!}
@stop