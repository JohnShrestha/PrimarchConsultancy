  <!-- START HEADER-->
  <header class="header">
      <div class="page-brand">
          <a class="link" href="{{ route('admin.index') }}">
            @if($all_view['setting']->site_name)
              <span class="brand"><small>{{ $all_view['setting']->site_name }} </small>&nbsp;
                  <span class="brand-tip"></span>
              </span>
              <span class="brand-mini">{{ $all_view['setting']->site_name }}</span>
                @endif
          </a>
      </div>
      <div class="flexbox flex-1">
          <!-- START TOP-LEFT TOOLBAR-->
          <ul class="nav navbar-toolbar">
              <li>
                  <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
              </li>

              <li class="dropdown dropdown-inbox">
                  <a href="{{ route('admin.message.index') }}"><i class="fa fa-envelope-o"></i>
                      <span class="badge badge-primary envelope-badge">@if(isset($all_view['contact_count'])){{ $all_view['contact_count'] }} @endif</span>
                  </a>
              </li>

              <li class="">
                  <a href="{{ route('site.index') }}" target="_blank">
                      <i class="fa fa-home"></i>&nbsp;
                      <span class="">View Website</span>
                  </a>
              </li>
          </ul>
          <!-- END TOP-LEFT TOOLBAR-->
          <!-- START TOP-RIGHT TOOLBAR-->
          <ul class="nav navbar-toolbar">


              <li class="dropdown dropdown-user">
                  <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                      @if(Auth::user()->avatar)
                      <img src="{{ asset(Auth::user()->avatar) }}" />
                      @else
                      <img src="{{ asset('assets/cms/img/admin-avatar.png')}}" />
                      @endif
                      <span></span>{{ auth()->user()->name}}<i class="fa fa-angle-down m-l-5"></i></a>
                  <ul class="dropdown-menu dropdown-menu-right">
                      <a class="dropdown-item" href="{{ route('admin.user_profile.show')}}"><i class="fa fa-user"></i>Profile</a>
                      <a class="dropdown-item" href="{{ route('admin.setting.index')}}"><i class="fa fa-cog"></i>Settings</a>
                      <a class="dropdown-item" href="https://prabidhienterprises.com.np/" target="_blank"><i class="fa fa-support"></i>Support</a>
                      <li class="dropdown-divider"></li>
                      <a class="dropdown-item" href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                          <i class="fa fa-power-off"></i>Logout
                      </a>
                      <form action="{{ route('logout')}}" method="post" id="logout-form" class="d-none">
                          @csrf
                      </form>
                  </ul>
              </li>
          </ul>
          <!-- END TOP-RIGHT TOOLBAR-->
      </div>
  </header>
  <!-- END HEADER-->