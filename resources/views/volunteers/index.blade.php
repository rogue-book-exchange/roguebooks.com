@extends('app')

@section('title')
  Manage Volunteers
@stop

@section('content')
  <table class="table table-hover">
    <thead>
      <th>
        <h3>Name</h3>
      </th>
      <th>
        <h3>Email</h3>
      </th>
    </thead>
    <tbody class="table-hover">
      @foreach ($volunteers as $v)
        <tr>
          <td>
            {!! Html::linkRoute('volunteers.show', 
                      $v->first_name." ".$v->last_name,
                      $v->id) !!}
          </td>
          <td>{{ $v->email }}</td>
        </tr>
      @endforeach
    </tbody>
  </table>
@stop

@section('footer')
  @include('partials.footer')
@stop