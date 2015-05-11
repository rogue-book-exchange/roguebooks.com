@extends('app')

@section('title')
Home Page
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-7">
      <div class="row visible-xs">
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>We always have books waiting to be shelved. Sign up to <b>Volunteer Today!</b></p>
          <a href="#" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
          <!-- end content from database -->
        </div>
        <br>
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>As always, all donations are tax deductible!</p>
          @include('partials.paypal')
          <!-- end content from database -->
        </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>We always have books waiting to be shelved. Sign up to <b>Volunteer Today!</b></p>
          <!-- end content from database -->
        </div>
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>As always, all donations are tax deductible!</p>
          <!-- end content from database -->
        </div>
      </div>
      <div class="row hidden-xs">
        <div class="col-sm-6 text-center">
          <a href="#" class="btn btn-success yellow-white-gradient full-width">Volunteer</a>
        </div>
        <div class="col-sm-6 text-center">
          @include('partials.paypal')
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          @if (Auth::check())
            {!! Form::open() !!}
            {!! Form::textarea('openhoursheader', $block['openhoursheader']) !!}
            {!! Form::close() !!}
          @else
            <h3>{{ $block['openhoursheader'] }}</h3>
          @endif
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          @if (isset($contents[2]))
            <p>{{ $contents[2]->body }}</p>
          @endif

          <ul>
            <li>
              Our largest selections are in general fiction, mystery/thriller/horror, religion and spirituality, nonfiction, health/diet and romance. We also have many items in young adult, reference/ educational/ textbooks/ homeschool, pregnancy/ parenting, childrens, cookbooks, biography and autobiography, science fiction/ fantasy, history and current events, business/ finance, sports, travel, pets, humor, home improvement, crafts/ hobbies, foreign language, games, computer, nature, classics, western, movies, audiobooks, and CDs. Obviously, our stock will be in constant flux so you'll have to come in to see what you can find!
            </li>
            <li>
              We do not accept encyclopedias, Reader's Digest Condensed books or magazines.
            </li>
            <li>
              There is a donation drop box available in our parking lot for drop-off any time-- look for the book shed! If you have a large donation and can not make it to us during open hours, please call to schedule an appointment.
            </li>
          </ul>

        </div>
      </div>
    </div>
    <div class="col-sm-5">
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              <h2>Our Wish List</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <ul>
            <li>Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat.</li>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</li>
            <li>Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.</li>
            <li>Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.</li>
          </ul>
        </div>
      </div>
      <div class="panel panel-success">
        <div class="panel-heading-border">
          <div class="panel-heading green-white-gradient">
            <div class="panel-title text-center">
              <h2>Whats new on our Amazon</h2>
            </div>
          </div>
        </div>
        <div class="panel-body">
          <ul>
            <li>Morbi in sem quis dui placerat ornare.</li>
            <li>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat.</li>
            <li>Phasellus ultrices nulla quis nibh.</li>
            <li>Pellentesque fermentum dolor. </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection