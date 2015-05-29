@extends('app')

@section('title')
  Show Volunteer
@stop

@section('content')

  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      <h3 class="volunteer-header">Volunteer Info</h3>
      <p>Name: {{ $v->first_name." ".$v->last_name }}</p>
      <p>Email: {{ $v->email }}</p>
      <p>
        Primary Phone: {{ $v->primary_phone }}
        @if ($v->secondary_phone)
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secondary Phone: {{ $v->secondary_phone }}
        @endif
      </p>
      <p>Address: {{ $v->address }}, {{ $v->city }}, {{ $v->zip_code }}</p>

      <br />

      <h3 class="volunteer-header">Emergency Contact</h3>
      <p>
        Name: {{ $v->emergency_name }}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone: {{ $v->emergency_phone }}
      </p>

      <br />

      <h3 class="volunteer-header">Program Information</h3>
      @if ($v->program)
        <p>Program: {{ $v->program }}</p>
      @endif
      @if ($v->program_name)
        <p>Program Name: {{ $v->program_name }}</p>
      @endif
      @if ($v->program_phone)
        <p>Program Phone: {{ $v->program_phone }}</p>
      @endif
      @if (!($v->program || $v->program_name || $v->program_phone))
        <p>No Program Info Available</p>
      @endif

      <br />

      <h3 class="volunteer-header">Availability</h3>
      <p>I am available to work beginning: {{ $v->start_date }}</p>
      <p>
        Volunteer Days Preference:
        @foreach (unserialize($v->weekday_group) as $item)
          {{ $item.", " }}
        @endforeach
      </p>
      <p>
        Volunteering: {{ $v->time_commitment }}
        @if ($v->commitment_weeks)
          ({{ $v->commitment_weeks }})
        @endif
      </p>
      <p>How often can you work: {{ $v->frequency }}</p>

      <br />

      <h3 class="volunteer-header">Volunteer Assignment Preferences</h3>

      <h4>Book Processing</h4>
      @foreach (unserialize($v->book_processing_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>Research Analysis</h4>
      @foreach (unserialize($v->research_analysis_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>Front Desk Reception</h4>
      @foreach (unserialize($v->front_desk_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>Janitorial</h4>
      @foreach (unserialize($v->janitorial_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>Special Projects</h4>
      @foreach (unserialize($v->special_projects_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>Book Pickups</h4>
      @foreach (unserialize($v->book_pickups_group) as $item)
        {{ $item.", " }}
      @endforeach
      
      <h4>Has Vehicle</h4>
      <p>{{ $v->has_vehicle }}</p>
      
      <h3 class="volunteer-header">Tell us about yourself</h3>
      <h4>I'm interested in:</h4>
      @foreach (unserialize($v->personal_interests_group) as $item)
        {{ $item.", " }}
      @endforeach

      <h4>My computer skills include:</h4>
      <p>{{ $v->computer_skills }}</p>
      <h4>Other relevant experience:</h4>
      <p>{{ $v->experience }}</p>
    </div>
  </div>

@stop