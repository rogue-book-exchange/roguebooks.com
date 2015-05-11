@extends('app')

@section('content')
  <h1>What Do We Need ?</h1>
  
  <hr/>

  
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

<!-- Date to donate -->
<div class="form-group">
{!! Form::label('DateNeeded', 'Date materials are needed by:') !!}
{!! Form::input('date', 'DateNeeded', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
  
  
<!-- Button for submission  -->
<div class="form-group">
  {!! Form::submit('Submit Materials', ['class' => 'btn btn-primary form-control']) !!}
</div>
  {!! Form::close() !!}

@section('content')

<h1>What we need and when we need it</h1>

<hr/>

@foreach($items as $item)

<article> 
  
  <h2>
    {{ $item->ItemName }}
  </h2>
  
  <div class="ItemDescription">
    {{ $item->ItemDescription }}
    </div>
  
  <div class="DateNeeded">
    {{ $item->DateNeeded }}
    </div>
  
</article>

@endforeach

@stop