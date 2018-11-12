<nav class="navbar is-link">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{ route('frontend.index') }}">
      <strong class="title m-l-20 m-r-20">{{app_name()}}</strong>
      <!--<img src="http://bulma.io/images/bulma-logo.png" alt="Bulma: a modern CSS framework based on Flexbox" width="112" height="28">-->
    </a>
    <a class="navbar-item is-hidden-desktop" href="https://github.com/jgthms/bulma" target="_blank">
      <span class="icon" style="color: #333;">
        <i class="fa fa-github"></i>
      </span>
    </a>
    <a class="navbar-item is-hidden-desktop" href="https://twitter.com/jgthms" target="_blank">
      <span class="icon" style="color: #55acee;">
        <i class="fa fa-twitter"></i>
      </span>
    </a>
    <div class="navbar-burger burger" data-target="navMenuExample3">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div id="navMenuExample3" class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item " href="{{ route('frontend.index') }}">
        Home
      </a>
   
      <a href="{{route('frontend.contact')}}" 
        class="navbar-item {{ active_class(Active::checkRoute('frontend.contact')) }}">
        @lang('navs.frontend.contact')
      </a>
      <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link">
          More
        </div>
        <div id="moreDropdown" class="navbar-dropdown ">
          <a class="navbar-item " href="#extensions/">
            <div class="level is-mobile">
              <div class="level-left">
                <div class="level-item">
                  <p>
                    <strong>Extensions</strong>
                    <br>
                    <small>Side projects to enhance Bulma</small>
                  </p>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="navbar-end">
        @auth
          <a href="{{route('frontend.user.dashboard')}}" 
             class="navbar-item {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}">
             @lang('navs.frontend.dashboard')
          </a>
        @endauth

        @guest

          @if(config('access.registration'))
            <div class="navbar-item">
              <a href="{{route('frontend.auth.register')}}" 
                class="button is-success {{ active_class(Active::checkRoute('frontend.auth.register')) }}">
                @lang('navs.frontend.register')
              </a>
            </div>
          @endif

          <div class="navbar-item">
            <a href="{{route('frontend.auth.login')}}" 
              class="button is-dark {{ active_class(Active::checkRoute('frontend.auth.login')) }}">
              @lang('navs.frontend.login')
            </a>
          </div>

        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link  is-active" href="#">
                {{ $logged_in_user->name }}
            </a>
            <div class="navbar-dropdown ">
              @can('view backend')
                <a href="{{ route('admin.dashboard') }}" 
                   class="navbar-link">
                   @lang('navs.frontend.user.administration')
                </a>
              @endcan
              <a href="{{ route('frontend.user.account') }}" 
                 class="navbar-link {{ active_class(Active::checkRoute('frontend.user.account')) }}">
                 @lang('navs.frontend.user.account')
              </a>
            
              <hr class="navbar-divider">

              <a href="{{ route('frontend.auth.logout') }}" 
                 class="navbar-link">
                 @lang('navs.general.logout')
              </a>
            </div>
          </div>

        @endguest
      </div>
    </div>
  </div>
</nav>