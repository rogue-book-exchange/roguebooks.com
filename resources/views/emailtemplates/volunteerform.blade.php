<h3 class="volunteer-header">Volunteer Info</h3>
<p>Name: {{ $first_name." ".$last_name }}</p>
<p>Email: {{ $email }}</p>
<p>
  Primary Phone: {{ $primary_phone }}
  @if ($secondary_phone)
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Secondary Phone: {{ $secondary_phone }}
  @endif
</p>
<p>Address: {{ $address }}, {{ $city }}, {{ $zip_code }}</p>

<br />

<h3 class="volunteer-header">Emergency Contact</h3>
<p>
  Name: {{ $emergency_name }}
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone: {{ $emergency_phone }}
</p>

<br />

<h3 class="volunteer-header">Program Information</h3>
@if ($program)
  <p>Program: {{ $program }}</p>
@endif
@if ($program_name)
  <p>Program Name: {{ $program_name }}</p>
@endif
@if ($program_phone)
  <p>Program Phone: {{ $program_phone }}</p>
@endif
@if (!($program || $program_name || $program_phone))
  <p>No Program Info Available</p>
@endif

<br />

<h3 class="volunteer-header">Availability</h3>
<p>I am available to work beginning: {{ $start_date }}</p>
<p>
  Volunteer Days Preference:
  @foreach (unserialize($weekday_group) as $item)
    {{ $item.", " }}
  @endforeach
</p>
<p>
  Volunteering: {{ $time_commitment }}
  @if ($commitment_weeks)
    ({{ $commitment_weeks }})
  @endif
</p>
<p>How often can you work: {{ $frequency }}</p>

<br />

<h3 class="volunteer-header">Volunteer Assignment Preferences</h3>

<h4>Book Processing</h4>
@if ($book_processing_group)
@foreach (unserialize($book_processing_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Research Analysis</h4>
@if ($research_analysis_group)
@foreach (unserialize($research_analysis_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Front Desk Reception</h4>
@if ($front_desk_group)
@foreach (unserialize($front_desk_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Janitorial</h4>
@if ($janitorial_group)
@foreach (unserialize($janitorial_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Special Projects</h4>
@if ($special_projects_group)
@foreach (unserialize($special_projects_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Book Pickups</h4>
@if ($book_pickups_group)
@foreach (unserialize($book_pickups_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>Has Vehicle</h4>
<p>{{ $has_vehicle }}</p>

<h3 class="volunteer-header">Tell us about yourself</h3>
<h4>I'm interested in:</h4>
@if ($personal_interests_group)
@foreach (unserialize($personal_interests_group) as $item)
  {{ $item.", " }}
@endforeach
@endif

<h4>My computer skills include:</h4>
<p>{{ $computer_skills }}</p>
<h4>Other relevant experience:</h4>
<p>{{ $experience }}</p>
