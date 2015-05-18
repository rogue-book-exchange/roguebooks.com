@extends('app')

@section('title')
  Volunteer Signup
@stop

@section('content')
  {!! Form::open() !!}
  <h3>VOLUNTEER APPLICATION</h3>
  <h4>CONTACT INFORMATION</h4>
  {!! Form::text('first_name', null, ['placeholder' => 'First Name']) !!}
  {!! Form::text('last_name', null, ['placeholder' => 'Last Name']) !!}
  {!! Form::text('email', null, ['placeholder' => 'Email']) !!}
  {!! Form::text('home_phone', null, ['placeholder' => 'Home Phone']) !!}
  {!! Form::text('cell_phone', null, ['placeholder' => 'Cell Phone']) !!}
  {!! Form::text('address', null, ['placeholder' => 'Address']) !!}
  {!! Form::text('city', null, ['placeholder' => 'City']) !!}
  {!! Form::text('zip', null, ['placeholder' => 'Zip Code']) !!}
  {!! Form::text('emergency_contact', null, ['placeholder' => 'Emergency Contact Name & Phone #']) !!}
  <p><strong>Note:</strong> If you are applying to volunteer because you are a participant in a community 
      jobs program (i.e. Job Council, Experience Works, Etc.), please provide the following information:</P>
  {!! Form::text('program', null, ['placeholder' => 'Program Name']) !!}
  {!! Form::text('program_contact', null, ['placeholder' => 'Program Contact Name & Phone #']) !!}
  <br>
  <h4>AVAILABILITY FOR SERVICE</h4>
  <p>I am available to work beginning:</p>
  {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}
  <p>Please indicate your preferences for days and hours to volunteer:</p>
  <p>Volunteering:</p>
  <p>How often can you work?</p>
  <br>
  <h4>PHYSICAL & SENSORY DEMANDS</h4>
  <p>The volunteer will need to be able to stand/walk in the process of packing and unpacking boxes of books 
      and stocking shelves. He/she may need to sit at a computer for periods of time. He/she may need to lift 
      books and other media, boxes of books, supplies and/or other materials from time to time. The store may 
      be noisy and busy, making it difficult to concentrate from time to time.</p>
  <br>
  <h4>VOLUNTEER ASSIGNMENT PREFERENCES</h4>
  <p><strong>Book Processing:</strong></p>
  <p><strong>Research & Analysis:</strong></p>
  <p><strong>Front Desk Reception:</strong></p>
  <p><strong>Light Janitorial:</strong></p>
  <p><strong>Special Projects:</strong></p>
  <p><strong>Book Pickups:</strong></p>
  <br>
  <p><strong>Tell us about yourself:</strong></p>
  <p>I'm interested in:</p>
  <p>My computer skills include:</p>
  {!! Form::textarea('computer_skills', null, ['size' => '150x3']) !!}
  <p>Other relevant experience I want you to know about:</p>
  {!! Form::textarea('experience', null, ['size' => '150x3']) !!}
  <br>
  <h4>RBE EXPECTATIONS OF VOLUNTEERS</h4>
  <p>As a volunteer, I agree:</p>
  <ol>
    <li>I will notify the Store Manager as soon as possible if I am not able to report for my assigned shift. 
        If I cannot reach the Manager by phone, I will leave a message on the answering machine.</li>
    <li>I will always represent the best interest of the Rogue Book Exchange, always using care and consideration.</li>
  </ol>
  <p>Please be aware that our need for additional Bookstore volunteers fluctuates and we attempt to match applicants 
    with openings based on their hours of availability, areas of interest and physical capablilities. Thank you for 
    your interest.</p>
  {!! Form::close() !!}
@stop