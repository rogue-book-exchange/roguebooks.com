@if(Session::has($name))
 <div class="row">
  <div class="col-sm-12">
    <div class="alert alert-{{ Session::get('class') }} text-center">
      {{Session::get($name)}}
    </div>
  </div>
 </div>
@endif