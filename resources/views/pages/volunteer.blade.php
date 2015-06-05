@extends('app')

@section('title')
  Volunteer Signup
@stop

@section('content')
@if(Session::has('message'))
 <div class="alert alert-info">
   {{Session::get('message')}}
 </div>
@endif
@if($errors->all())
<div class="row">
 <div class="col-sm-12">
   <div class="panel panel-danger">
     <div class="panel-body">
       <ul>
       @foreach($errors->all() as $error)
       <li>{{ $error }}</li>
       @endforeach
       </ul>
     </div>
   </div>
 </div>
</div>
@endif
  
  <div class="row">
    <div class="col-sm-10 col-sm-offset-1">
      @if (Auth::check())
        {!! Form::textarea('volunteer-header', $page['volunteer-header'], ['rows'=>'7', 'form'=>'page-update']) !!}
      @else
        @if (array_key_exists('volunteer-header', $page))
          <p class="double-space">{{ $page['volunteer-header'] }}</p>
        @endif
      @endif
    </div>
  </div>
  <div class="row">
    <span class="text-center">
      <h3>VOLUNTEER APPLICATION</h3>
      <h4>CONTACT INFORMATION</h4>
    </span>
    <br />
    <div class="col-sm-6">
      {!! Form::open(['url'=>'/volunteer']) !!}
      {!! Form::text('first_name', null, ['placeholder' => 'First Name']) !!}
      {!! Form::text('last_name', null, ['placeholder' => 'Last Name']) !!}
      {!! Form::text('email', null, ['placeholder' => 'Email']) !!}
      {!! Form::text('primary_phone', null, ['placeholder' => 'Primary Phone']) !!}
      {!! Form::text('secondary_phone', null, ['placeholder' => 'Secondary Phone']) !!}
    </div>
    <div class="col-sm-6">
      {!! Form::text('address', null, ['placeholder' => 'Address']) !!}
      {!! Form::text('city', null, ['placeholder' => 'City']) !!}
      {!! Form::text('zip_code', null, ['placeholder' => 'Zip Code']) !!}
      {!! Form::text('emergency_name', null, ['placeholder' => 'Emergency Contact Name']) !!}
      {!! Form::text('emergency_phone', null, ['placeholder' => 'Emergency Contact Phone #']) !!}
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-sm-12">
      <p>Note: If you are applying to volunteer because you are a participant in a community jobs program (i.e. Job Council, Experience Works, Etc.), please provide the following information:</p>

      {!! Form::text('program', null, ['placeholder' => 'Program Name']) !!}
      {!! Form::text('program_name', null, ['placeholder' => 'Program Contact Name']) !!}
      {!! Form::text('program_phone', null, ['placeholder' => 'Program Contact Phone #']) !!}
    </div>
  </div>
  <br />
  <div class="row">
    
  </div>
  <br />
  <div class="row">
    <div class="col-sm-12">
      <h4 class="text-center">AVAILABILITY FOR SERVICE</h4>
      {!! Form::label('start_date', 'I am available to work beginning:') !!}
      {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}
    </div>
  </div>
  
  <br />

  <div class="row">
    <div class="col-sm-6">
      <p>
        Please indicate your preferences for days and hours to volunteer:
      </p>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Sunday') !!}
        {!! Form::label('weekday_group[]', 'Sunday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Monday') !!}
        {!! Form::label('weekday_group[]', 'Monday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Tuesday') !!}
        {!! Form::label('weekday_group[]', 'Tuesday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Wednesday') !!}
        {!! Form::label('weekday_group[]', 'Wednesday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Thursday') !!}
        {!! Form::label('weekday_group[]', 'Thursday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Friday') !!}
        {!! Form::label('weekday_group[]', 'Friday') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('weekday_group[]', 'Saturday') !!}
        {!! Form::label('weekday_group[]', 'Saturday') !!}
      </div>
    </div>
    <div class="col-sm-6">
      <p>Volunteering:</p>
      <div class="form-group">
        {!! Form::radio('time_commitment', 'Long Term') !!}
        {!! Form::label('time_commitment', 'Long-term') !!}
      </div>
      <div class="form-group">
        {!! Form::radio('time_commitment', 'Temporary') !!}
        {!! Form::label('time_commitment', 'Temporary(number of weeks if known)') !!}
        {!! Form::text('commitment_weeks') !!}
      </div>
      <br />
      <p>How often can you work?</p>
      <div class="form-group">
        {!! Form::radio('frequency', 'Weekly Plus') !!}
        {!! Form::label('frequency', 'More frequently than weekly') !!}
      </div>
      <div class="form-group">
        {!! Form::radio('frequency', 'Weekly') !!}
        {!! Form::label('frequency', 'Weekly') !!}
      </div>
      <div class="form-group">
        {!! Form::radio('frequency', 'Biweekly') !!}
        {!! Form::label('frequency', 'Biweekly') !!}
      </div>
      <div class="form-group">
        {!! Form::radio('frequency', 'Monthly') !!}
        {!! Form::label('frequency', 'Monthly') !!}
      </div>
    </div>
  </div>
  
  <br>
  <div class="row">
    <div class="col-sm-12">
      <h4>PHYSICAL & SENSORY DEMANDS</h4>
      <p>
        The volunteer will need to be able to stand/walk in the process of packing and unpacking boxes of books and stocking shelves. He/she may need to sit at a computer for periods of time. He/she may need to lift books and other media, boxes of books, supplies and/or other materials from time to time. The store may be noisy and busy, making it difficult to concentrate from time to time.
      </p>
    </div>
  </div>
  <br>
  
  <div class="row">
    <div class="col-sm-12"><span class="text-center">
      <h4>VOLUNTEER ASSIGNMENT PREFERENCES</h4>
      <p>(Note: all assignments will be made according to ability as determined by management)</p>
    </span></div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <h4>Book Processing:</h4>
      {!! Form::checkbox('book_processing_group[]', 'Straigten Shelves') !!}
      {!! Form::label('book_processing_group[]', 'Straighten shelves') !!}
      <br />
      {!! Form::checkbox('book_processing_group[]', 'Sort Books') !!}
      {!! Form::label('book_processing_group[]', 'Sort books') !!}
      <br />
      {!! Form::checkbox('book_processing_group[]', 'Shelve Books') !!}
      {!! Form::label('book_processing_group[]', 'Shelve books') !!}
    </div>
    <div class="col-sm-4">
      <h4>Research & Analysis:</h4>
      {!! Form::checkbox('research_analysis_group[]', 'Scanning') !!}
      {!! Form::label('research_analysis_group[]', 'Scanning') !!}
      <br />
      {!! Form::checkbox('research_analysis_group[]', 'Listing online') !!}
      {!! Form::label('research_analysis_group[]', 'Listing online') !!}
    </div>
    <div class="col-sm-4">
      <h4>Front Desk Reception:</h4>
      {!! Form::checkbox('front_desk_group[]', 'Customer service') !!}
      {!! Form::label('front_desk_group[]', 'Customer service') !!}
      <br />
      {!! Form::checkbox('front_desk_group[]', 'Answer phone') !!}
      {!! Form::label('front_desk_group[]', 'Answer phone') !!}
    </div>
  </div>
  <br />
  <div class="row">
    <div class="col-sm-4">
      <h4>Light Janitorial:</h4>
      {!! Form::checkbox('janitorial_group[]', 'Dust vacuum') !!}
      {!! Form::label('janitorial_group[]', 'Dust & Vacuum') !!}
      <br />
      {!! Form::checkbox('janitorial_group[]', 'Clean bathroom') !!}
      {!! Form::label('janitorial_group[]', 'Clean bathroom') !!}
      <br />
      {!! Form::checkbox('janitorial_group[]', 'Recycling') !!}
      {!! Form::label('janitorial_group[]', 'Recycling') !!}
    </div>
    <div class="col-sm-4">
      <h4>Special Projects:</h4>
      {!! Form::checkbox('special_projects_group[]', 'Fund raising') !!}
      {!! Form::label('special_projects_group[]', 'Fund raising') !!}
      <br />
      {!! Form::checkbox('special_projects_group[]', 'Offsite booth') !!}
      {!! Form::label('special_projects_group[]', 'Offsite booth') !!}
      <br />
      {!! Form::checkbox('special_projects_group[]', 'Committees') !!}
      {!! Form::label('special_projects_group[]', 'Committees') !!}
    </div>
    <div class="col-sm-4">
      <h4>Book Pickups:</h4>
      {!! Form::checkbox('book_pickups_group[]', 'Medford') !!}
      {!! Form::label('book_pickups_group[]', 'Medford') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Central Point') !!}
      {!! Form::label('book_pickups_group[]', 'Central Point') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Eagle Point') !!}
      {!! Form::label('book_pickups_group[]', 'Eagle Point') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Shady Cove') !!}
      {!! Form::label('book_pickups_group[]', 'Shady Cove') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Ashland') !!}
      {!! Form::label('book_pickups_group[]', 'Ashland') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Talent/Phoenix') !!}
      {!! Form::label('book_pickups_group[]', 'Talent/Phoenix') !!}
      <br />
      {!! Form::checkbox('book_pickups_group[]', 'Jacksonville/Applegate/Ruch') !!}
      {!! Form::label('book_pickups_group[]', 'Jacksonville/Applegate/Ruch') !!}
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <p>I have an SUV, pickup truck or van that I'm willing to use:</p>
      <div class="form-group">
        {!! Form::radio('has_vehicle', 'Yes') !!}
        {!! Form::label('has_vehicle', 'Yes') !!}
      </div>
      <div class="form-group">
        {!! Form::radio('has_vehicle', 'No') !!}
        {!! Form::label('has_vehicle', 'No') !!}
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <h4>Tell us about yourself:</h4>
      <p>I'm interested in:</p>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'non_fiction') !!}
        {!! Form::label('personal_interests_group[]', 'Non-fiction') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'general_fiction') !!}
        {!! Form::label('personal_interests_group[]', 'General Fiction') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'mystery') !!}
        {!! Form::label('personal_interests_group[]', 'Mystery') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'romance') !!}
        {!! Form::label('personal_interests_group[]', 'Romance') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'westerns') !!}
        {!! Form::label('personal_interests_group[]', 'Westerns') !!}
      </div>
    </div>
    <div class="col-sm-4">
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'science_fiction') !!}
        {!! Form::label('personal_interests_group[]', 'Science Fiction/Fantasy') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'religous') !!}
        {!! Form::label('personal_interests_group[]', 'Religious/Spirituality') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'teens') !!}
        {!! Form::label('personal_interests_group[]', 'Teens/Tweens') !!}
      </div>
      <div class="form-group">
        {!! Form::checkbox('personal_interests_group[]', 'childrens') !!}
        {!! Form::label('personal_interests_group[]', 'Children\'s') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-12">
      <h4>My computer skills include:</h4>
      {!! Form::textarea('computer_skills', null, ['size' => '150x3']) !!}
      <h4>Other relevant experience I want you to know about:</h4>
      {!! Form::textarea('experience', null, ['size' => '150x3']) !!}
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-sm-12">
      <h4>RBE EXPECTATIONS OF VOLUNTEERS</h4>
      <p>As a volunteer, I agree:</p>
      <ol>
        <li>I will notify the Store Manager as soon as possible if I am not able to report for my assigned shift. 
            If I cannot reach the Manager by phone, I will leave a message on the answering machine.</li>
        <li>I will always represent the best interest of the Rogue Book Exchange, always using care and consideration.</li>
      </ol>
      <p>
        Please be aware that our need for additional Bookstore volunteers fluctuates and we attempt to match applicants with openings based on their hours of availability, areas of interest and physical capablilities. Thank you for your interest.
      </p>
      {!! Form::submit('Submit Form', ['class' => 'btn btn-default form-control']) !!}
      {!! Form::close() !!}
    </div>
  </div>
@stop

@section('footer')
  @include('partials/footer')
@stop