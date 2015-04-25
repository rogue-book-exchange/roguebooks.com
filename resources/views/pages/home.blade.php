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
          <a href="#" class="btn btn-success yellow-white-gradient full-width">Donate</a>
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
          <a href="#" class="btn btn-success yellow-white-gradient full-width">Donate</a>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <p>Rogue Book Exchange is a nonprofit organization founded to unite unwanted books with people who want them. We look like a bookstore, but there's one big difference: all the books on the shelves are free!</p>
        </div>
      </div>
      <br>
      <div class="panel panel-success" id="homepage-panel">
        <div class="panel-body text-center">
          <h3>Open 10am-3pm Wednesday-Saturday</h3>
          <p>Donations can be left in the shed across the parking lot any time. Larger donations will be accepted by appointment</p>
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <p>A small percentage of donated books will be sold online in order to pay the bills. All other books will be made available free to the public. You don't have to donate books in order to take some home and you don't have to take any home if you donate. Someone would love to have the books and other media that have been gathering dust on your shelves or in storage so bring them on in and take home something new!</p>

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