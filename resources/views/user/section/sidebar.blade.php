 <!-- START SIDEBAR-->
 <nav class="page-sidebar" id="sidebar">
     <div id="sidebar-collapse">
         <div class="admin-block d-flex">
             <div>
                 <img src="{{ asset('assets/cms/img/admin-avatar.png')}}" width="45px" />
             </div>
             <div class="admin-info">
                 <div class="font-strong">{{auth()->user()->name}}</div><small>{{ ucfirst(auth()->user()->role)}}</small>
             </div>
         </div>
         <ul class="side-menu metismenu">
             <li>
                 <a class="active" href="{{ route('user.index') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                     <span class="nav-label">ड्यासबोर्ड</span>
                 </a>
             </li>
             <li class="heading">FEATURES</li>
             <li>
                 <a href="javascript:;"><i class="sidebar-item-icon fa fa-bars"></i>
                     <span class="nav-label">कर्जमाग निवेदक </span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a href="{{ route('user.application.index')}}">कर्जमाग आबेदन </a>
                     </li>
                     <li>
                         <a href="colors.html">नयाँ खाता</a>
                     </li>
                     <li>
                         <a href="colors.html">नगद जम्मा</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="javascript:;"><i class="sidebar-item-icon fa fa-cogs"></i>
                     <span class="nav-label">सेटिंग</span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a href="{{ route('user.user_profile.show') }}"> प्रोफाइल सेटिंग</a>
                     </li>
                     <li>
                         <a href="colors.html">User Security</a>
                     </li>
                 </ul>
             </li>
             <li>
                 <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-1').submit();"><i class="sidebar-item-icon fa fa-power-off"></i>
                     <span class="nav-label">Logout</span>
                 </a>
                 <form id="logout-form-1" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>
             </li>

         </ul>
     </div>
 </nav>
 <!-- END SIDEBAR-->