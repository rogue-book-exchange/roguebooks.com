<div class="container container-full brown-border-top">
  <div class="row green-white-gradient">
    <div class="col-sm-12">
      <span class="pull-right">
        <ul class="hidden-xs">
          <li class="footer-nav"><a href="/">Home</a></li>
          <li class="footer-nav"><a href="/faqs">FAQ</a></li>
          <li class="footer-nav"><a href="/contact">Contact</a></li>
          @if (Auth::check())
            <li class="footer-nav"><a href="/auth/logout">Logout</a></li>
          @else
            <li class="footer-nav"><a href="/login">Login</a></li>
          @endif
        </ul>
        
        <br>
        
        @if (Auth::check())
          <li class="footer-form">
            {!! Form::text('global-footer-email', $page['global-footer-email'], ['rows'=>'1', 'form'=>'page-update']) !!}
          </li>
          
          <li class="footer-form">
            {!! Form::text('global-footer-address', $page['global-footer-address'], ['rows'=>'1', 'form'=>'page-update']) !!}
          </li>

          <li class="footer-form">
            {!! Form::text('global-footer-phone', $page['global-footer-phone'], ['rows'=>'1', 'form'=>'page-update']) !!}
          </li>
        @else
        <p>
          @if (array_key_exists('global-footer-email', $page))
            <a href="mailto:{{ $page['global-footer-email'] }}">
              {{ $page['global-footer-email'] }}
            </a>
          @endif
          | 
          @if (array_key_exists('global-footer-address', $page))
            {{ $page['global-footer-address'] }}
          @endif
          | 
          @if (array_key_exists('global-footer-phone', $page))
            {{ $page['global-footer-phone'] }}
          @endif
        </p>
        @endif
        <p class="pull-right">Rogue Book Exchange is a 501(c)(3) organization | Federal ID # is 26-0889551</p>
      </span>
    </div>
  </div>
</div>