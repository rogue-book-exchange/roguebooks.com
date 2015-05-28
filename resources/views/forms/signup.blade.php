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
  {!! Form::open(['url'=>'/volunteer']) !!}
  <h3>VOLUNTEER APPLICATION</h3>
  <h4>CONTACT INFORMATION</h4>
    {!! Form::text('first_name', null, ['placeholder' => 'First Name']) !!}
    {!! Form::text('last_name', null, ['placeholder' => 'Last Name']) !!}
    {!! Form::text('email', null, ['placeholder' => 'Email']) !!}
    {!! Form::text('primary_phone', null, ['placeholder' => 'Primary Phone']) !!}
    {!! Form::text('secondary_phone', null, ['placeholder' => 'Secondary Phone']) !!}
    {!! Form::text('address', null, ['placeholder' => 'Address']) !!}
    {!! Form::text('city', null, ['placeholder' => 'City']) !!}
    {!! Form::text('zip_code', null, ['placeholder' => 'Zip Code']) !!}
    {!! Form::text('emergency_name', null, ['placeholder' => 'Emergency Contact Name']) !!}
    {!! Form::text('emergency_phone', null, ['placeholder' => 'Emergency Contact Phone #']) !!}
  <p><br><strong>Note:</strong> If you are applying to volunteer because you are a participant in a community 
    jobs program (i.e. Job Council, Experience Works, Etc.), please provide the following information:</p>
    {!! Form::text('program', null, ['placeholder' => 'Program Name']) !!}
    {!! Form::text('program_name', null, ['placeholder' => 'Program Contact Name']) !!}
    {!! Form::text('program_phone', null, ['placeholder' => 'Program Contact Phone #']) !!}
  <br>
  <h4>AVAILABILITY FOR SERVICE</h4>
  <p>I am available to work beginning:</p>
    {!! Form::input('date', 'start_date', null, ['class' => 'form-control']) !!}
  <p><br>Please indicate your preferences for days and hours to volunteer:</p>
  <p>
    {!! Form::checkbox('weekday_group[]', 'sunday') !!}&nbsp;Sunday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'monday') !!}&nbsp;Monday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'tuesday') !!}&nbsp;Tuesday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'wednesday') !!}&nbsp;Wednesday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'thursday') !!}&nbsp;Thursday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'friday') !!}&nbsp;Friday&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('weekday_group[]', 'saturday') !!}&nbsp;Saturday&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br>Volunteering:</p>
  <p>
    {!! Form::radio('time_commitment', 'Long Term') !!}&nbsp;Long-term&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio('time_commitment', 'Temporary') !!}&nbsp;Temporary(state number of weeks if known)&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::text('commitment_weeks') !!}
  </p>
  <p><br>How often can you work?</p>
  <p>
    {!! Form::radio('frequency', 'Weekly Plus') !!}&nbsp;More frequently than weekly&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio('frequency', 'Weekly') !!}&nbsp;Weekly&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio('frequency', 'Biweekly') !!}&nbsp;Biweekly&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio('frequency', 'Monthly') !!}&nbsp;Monthly&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <br>
  <h4>PHYSICAL & SENSORY DEMANDS</h4>
  <p>The volunteer will need to be able to stand/walk in the process of packing and unpacking boxes of books 
      and stocking shelves. He/she may need to sit at a computer for periods of time. He/she may need to lift 
      books and other media, boxes of books, supplies and/or other materials from time to time. The store may 
      be noisy and busy, making it difficult to concentrate from time to time.</p>
  <br>
  <h4>VOLUNTEER ASSIGNMENT PREFERENCES</h4>
  <p>(Note: all assignments will be made according to ability as determined by management)</p>
  <p><strong>Book Processing:</strong></p>
  <p>
    {!! Form::checkbox('book_processing_group[]', 'straigten_shelves') !!}&nbsp;Straighten Shelves&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_processing_group[]', 'sort_books') !!}&nbsp;Sort Books&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_processing_group[]', 'shelve_books') !!}&nbsp;Shelve Books&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br><strong>Research & Analysis:</strong></p>
  <p>
    {!! Form::checkbox('research_analysis_group[]', 'scanning') !!}&nbsp;Scanning&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('research_analysis_group[]', 'listing_online') !!}&nbsp;Listing Online&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br><strong>Front Desk Reception:</strong></p>
  <p>
    {!! Form::checkbox('front_desk_group[]', 'customer_service') !!}&nbsp;Customer Service&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('front_desk_group[]', 'answer_phone') !!}&nbsp;Answer Phone&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br><strong>Light Janitorial:</strong></p>
  <p>
    {!! Form::checkbox('janitorial_group[]', 'dust_vacuum') !!}&nbsp;Dust & Vacuum&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('janitorial_group[]', 'clean_bathroom') !!}&nbsp;Clean Bathroom&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('janitorial_group[]', 'recycling') !!}&nbsp;Recycling&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br><strong>Special Projects:</strong></p>
  <p>
    {!! Form::checkbox('special_projects_group[]', 'fund_raising') !!}&nbsp;Fund raising events&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('special_projects_group[]', 'offsite_booth') !!}&nbsp;Offsite Booth&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('special_projects_group[]', 'committees') !!}&nbsp;Committees&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br><strong>Book Pickups:</strong></p>
  <p>
    {!! Form::checkbox('book_pickups_group[]', 'medford') !!}&nbsp;Medford&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'central_point') !!}&nbsp;Central Point&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'eagle_point') !!}&nbsp;Eagle Point&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'shady_cove') !!}&nbsp;Shady Cove&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'ashland') !!}&nbsp;Ashland&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'talent_phoenix') !!}&nbsp;Talent/Phoenix&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('book_pickups_group[]', 'jacksonville_applegate_ruch') !!}&nbsp;Jacksonville/Applegate/Ruch&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p>I have an SUV, pickup truck or van that I'm willing to use:</p>
  <p>
    {!! Form::radio('has_vehicle') !!}&nbsp;yes&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::radio('has_vehicle') !!}&nbsp;no&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <br>
  <p><br><strong>Tell us about yourself:</strong></p>
  <p>I'm interested in:</p>
  <p>
    {!! Form::checkbox('personal_interests_group[]', 'non_fiction') !!}&nbsp;Non-fiction&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'general_fiction') !!}&nbsp;General Fiction&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'mystery') !!}&nbsp;Mystery&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'romance') !!}&nbsp;Romance&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'westerns') !!}&nbsp;Westerns&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'science_fiction') !!}&nbsp;Science Fiction/Fantasy&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p>
    {!! Form::checkbox('personal_interests_group[]', 'religous') !!}&nbsp;Religious/Spirituality&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'teens') !!}&nbsp;Teens/Tweens&nbsp;&nbsp;&nbsp;&nbsp;
    {!! Form::checkbox('personal_interests_group[]', 'childrens') !!}&nbsp;Children's&nbsp;&nbsp;&nbsp;&nbsp;
  </p>
  <p><br>My computer skills include:</p>
    {!! Form::textarea('computer_skills', null, ['size' => '150x3']) !!}
  <p><br>Other relevant experience I want you to know about:</p>
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
  {!! Form::submit('Submit Form', ['class' => 'btn btn-default form-control']) !!}
  {!! Form::close() !!}
@stop