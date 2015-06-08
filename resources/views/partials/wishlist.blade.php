<div class="panel panel-success">
  <div class="panel-heading-border">
    <div class="panel-heading green-white-gradient">
      <div class="panel-title text-center">
        @if (Auth::check())
          {!! Form::text('global-wish-list', $page['global-wish-list'], ['rows'=>'1', 'form'=>'page-update']) !!}
        @else
          @if (array_key_exists('global-wish-list', $page))
            <h2>{{ $page['global-wish-list'] }}</h2>
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