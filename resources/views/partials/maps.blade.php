<div class="panel panel-success {{ $visibility }}">
  <div class="panel-heading-border">
    <div class="panel-heading green-white-gradient">
      <div class="panel-title text-center">
        @if (Auth::check())
          {!! Form::text('google-maps', $page['google-maps'], ['rows'=>'1','form'=>'page-update']) !!}
        @else
          @if (array_key_exists('google-maps', $page))
            <h2>{{ $page['google-maps'] }}</h2>
          @endif
        @endif
      </div>
    </div>
  </div>
  <div class="panel-body text-center">
    <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=110+North+Ivy+Street,+Medford,+OR&amp;aq=0&amp;oq=110+N+Ivy+Street+Medfor&amp;sll=44.145447,-120.583402&amp;sspn=4.753569,11.634521&amp;ie=UTF8&amp;hq=&amp;hnear=110+N+Ivy+St,+Medford,+Oregon+97501&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=110+North+Ivy+Street,+Medford,+OR&amp;aq=0&amp;oq=110+N+Ivy+Street+Medfor&amp;sll=44.145447,-120.583402&amp;sspn=4.753569,11.634521&amp;ie=UTF8&amp;hq=&amp;hnear=110+N+Ivy+St,+Medford,+Oregon+97501&amp;t=m&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View Larger Map</a></small>
  </div>
</div>