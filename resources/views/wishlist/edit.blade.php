@extends('app')

@section('title')
  Edit Item
@stop

@section('content')
  <div class="row">
    <div class="col-sm-6 col-sm-offset-3">
      {!! Form::model($item, ['route'=>['wishlists.update', $item->id], 'method'=>'patch']) !!}
        <!-- Name of item  -->
        <div class="form-group">
          {!! Form::label('name', 'Item Name:') !!}
          {!! Form::text('name', null) !!}
        </div>
        <!-- Button for submission  -->
        <div class="form-group">
          {!! Form::submit('Update Item', ['class' => 'btn btn-default form-control']) !!}
        </div>
      {!! Form::close() !!}
    </div>
  </div>
@stop