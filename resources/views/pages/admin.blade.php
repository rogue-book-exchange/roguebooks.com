@extends('app')

@section('title')
  Admin Settings
@stop

@section('content')
  @include('errors/validation')
  <div class="row">
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title text-center">
            <h3>Admin Info</h3>
          </div>
        </div>
        <div class="panel-body">
          {!! Form::open(['route'=>'update.user.info']) !!}
            <table class="table">
              <tr>
                <td>First Name</td>
                <td>{!! Form::text('first_name', $user->first_name) !!}</td>
              </tr>
              <tr>
                <td>Last Name</td>
                <td>{!! Form::text('last_name', $user->last_name) !!}</td>
              </tr>
              <tr>
                <td>Email</td>
                <td>{!! Form::text('email', $user->email) !!}</td>
              </tr>
              @include('partials/flashmessage', ['name'=>'user_update'])
              <tr>
                <td class="text-center" colspan="2">
                  {!! Form::submit('Update Info', ['class'=>'btn btn-default']) !!}
                </td>
              </tr>
            </table>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title text-center">
            <h3>Change Password</h3>
          </div>
        </div>
        <div class="panel-body">
          {!! Form::open(['route'=>'admin.change.password']) !!}
            <table class="table">
              <tbody>
                <tr>
                  <td>New Password</td>
                  <td>{!! Form::password('password') !!}</td>
                </tr>
                <tr>
                  <td>Re-type New Password</td>
                  <td>{!! Form::password('password_confirmation') !!}</td>
                </tr>
                @include('partials/flashmessage', ['name'=>'password_update'])
                <tr>
                  <td class="text-center" colspan="2">
                    {!! Form::submit('Change Password', ['class'=>'btn btn-default']) !!}
                  </td>
                </tr>
              </tbody>
            </table>
          {!! Form::close() !!}
        </div>
      </div>
    </div>

    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-title text-center">
            <h3>Email Designations</h3>
          </div>
        </div>
        <div class="panel-body">
          <table class="table stiped-table">
            @foreach ($emails as $email)
              {!! Form::model($email, ['route'=>['update.admin.email', $email->id]]) !!}
                <tr>
                  <td>{{ humanize($email->role) }}</td>
                  <td>
                    {!! Form::text('email', $email->email, ['class' => 'form-control']) !!}
                    {!! Form::hidden('role', $email->role) !!}
                  </td>
                  <td>{!! Form::submit('Update') !!}</td>
                </tr>
              {!! Form::close() !!}
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@stop

@section('footer')
  @include('partials.footer')
@stop