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
          @if (Auth::check())
            {!! Form::textarea('body-intro-1', $page['body-intro-1'], ['rows'=>'4', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('body-intro-1', $page))
              <p class="double-space">{{ $page['body-intro-1'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          @if (Auth::check())
            {!! Form::text('hours-header', $page['hours-header'], ['rows'=>'1', 'form'=>'page-update']) !!}
            {!! Form::textarea('hours-body', $page['hours-body'], ['rows'=>'3', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('hours-header', $page) && array_key_exists('hours-body', $page))
              <h3>{{ $page['hours-header'] }}</h3>
              <p>{{ $page['hours-body'] }}</p>
            @endif
          @endif
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          @if (Auth::check())
            {!! Form::textarea('body-intro-2', $page['body-intro-2'], ['rows'=>'6', 'form'=>'page-update']) !!}
          @else
            @if (array_key_exists('body-intro-2', $page))
              <p class="double-space">{{ $page['body-intro-2'] }}</p>
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
              @if (Auth::check())
                {!! Form::text('wish-list', $page['wish-list'], ['rows'=>'1', 'form'=>'page-update']) !!}
              @else
                @if (array_key_exists('wish-list', $page))
                  <h2>{{ $page['wish-list'] }}</h2>
                @endif
              @endif
            </div>
          </div>
        </div>
        <div class="panel-body">
          <table class="table table-striped">
            <tbody>
              @foreach ($wishlistitems as $item)
                <tr>
                  <td>{{ $item->name }}</td>
                  @if (Auth::check())
                    <td>
                      {!! Html::linkRoute('wishlists.edit', 'Edit', $item->id, ['class'=>'btn btn-default']) !!}
                    </td>
                    <td>
                      {!! Form::open(['route'=>['wishlists.destroy', $item->id], 'method'=>'delete']) !!}
                      {!! Form::submit('Delete') !!}
                      {!! Form::close() !!}
                    </td>
                  @endif
                </tr>
              @endforeach
            </tbody>
          </table>
          @if (Auth::check())
            {!! Form::open(['route'=>'wishlists.store']) !!}
            <!-- Name of item  -->
            <div class="form-group">
              {!! Form::label('name', 'Item Name:') !!}
              {!! Form::text('name', null) !!}
            </div>
            <!-- Button for submission  -->
            <div class="form-group">
              {!! Form::submit('Add Item', ['class' => 'btn btn-default form-control']) !!}
            </div>
          {!! Form::close() !!}
          @endif
        </div>
      </div>
      @include('partials.maps', ['visibility' => 'visible-lg'])
    </div>
  </div>

  <div class="row">
    <div class="col-sm-8 col-sm-offset-2">
      @include('partials.maps', ['visibility' => 'hidden-lg'])
    </div>
  </div>
@endsection

@section('footer')
  @include('partials.footer')
@stop