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
				<iframe src="https://www.google.com/calendar/embed?title=Test%20Calendar&amp;mode=WEEK&amp;height=600&amp;wkst=1&amp;bgcolor=%23bfd8c9&amp;src=veedoubleyuh%40gmail.com&amp;color=%235229A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23333333&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="700px" frameborder="0" scrolling="no"></iframe>
		</div>
		<div class="col-sm-12 visible-xs">
			<iframe src="https://www.google.com/calendar/embed?title=Test%20Calendar&amp;showNav=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=480&amp;wkst=1&amp;bgcolor=%23bfd8c9&amp;src=veedoubleyuh%40gmail.com&amp;color=%235229A3&amp;src=en.usa%23holiday%40group.v.calendar.google.com&amp;color=%23333333&amp;ctz=America%2FLos_Angeles" style=" border-width:0 " width="100%" height="480" frameborder= scrolling="no"></iframe>
		</div>
	</div>
@stop