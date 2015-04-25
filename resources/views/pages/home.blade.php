@extends('app')

@section('title')
Home Page
@endsection

@section('content')
  <div class="row">
    <div class="col-sm-5">
      
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>We always have books waiting to be shelved. Sign up to <b>Volunteer Today!</b></p>
          <a href="#" class="btn btn-success green-gradient">Volunteer</a>
          <!-- end content from database -->
        </div>
        <div class="col-sm-6 text-center">
          <!-- Content from database -->
          <p>As always, all donations are tax deductible!</p>
          <a href="#" class="btn btn-success green-gradient">Donate</a>
          <!-- end content from database -->
        </div>
      </div>
      <br>
      <div class="row">
        <div class="col-sm-12">
          <p>Rogue Book Exchange is a nonprofit organization founded to unite unwanted books with people who want them. We look like a bookstore, but there's one big difference: all the books on the shelves are free!</p>
        </div>
      </div>
      <br>
      <div class="panel panel-default" id="homepage_panel">
        <div class="panel-body">
          <h3>Hours: 10am-3pm Wednesday-Saturday</h3>
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
  </div>
@endsection