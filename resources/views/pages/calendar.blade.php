@extends("app")
<!--Rogue Book Exchange
	Calendar page test
	4/17/15-->
@section("extraCSS")
	<link href="{{ asset('/css/calendar.css') }}" rel="stylesheet">
@stop

@section("title")
	Calendar | Rogue Book Exchange
@stop

@section("content")
	<div id="row">
		<div class="col-sm-12 hidden-xs">
      <div id="full" class="responsive-iframe-container visible-desktop visible-tablet hidden-phone">
				<iframe id="full" src="https://www.google.com/calendar/embed?showCalendars=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffcc99&amp;src=roguebookexchange%40gmail.com&amp;color=%23AB8B00&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FLos_Angeles" style=" border:solid 1px #777 " width="800" height="600" frameborder="0" scrolling="no"></iframe>
      </div>
		</div>
		<div class="col-sm-12 visible-xs">
      <div id="phone" class="responsive-iframe-container visible-phone hidden-desktop hidden-tablet">
        <iframe src="https://www.google.com/calendar/embed?showCalendars=0&amp;mode=AGENDA&amp;height=480&amp;wkst=1&amp;bgcolor=%23ffcc99&amp;src=roguebookexchange%40gmail.com&amp;color=%23AB8B00&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%238D6F47&amp;ctz=America%2FLos_Angeles" style=" border:solid 1px #777 " width="600" height="480" frameborder="0" scrolling="no"></iframe>
      </div>
		</div>
	</div>
@stop

@section('footer')
	@include('partials.footer')
@stop