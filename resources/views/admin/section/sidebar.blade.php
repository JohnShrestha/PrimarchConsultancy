 <!-- START SIDEBAR-->
 <nav class="page-sidebar" id="sidebar">
     <div id="sidebar-collapse">
         <div class="admin-block d-flex">
             <div>
                 @if($all_view['setting']->logo)
                 <img src="{{ asset($all_view['setting']->logo) }}" width="45px" />
                 @else
                 <img src="{{ asset('assets/cms/img/admin-avatar.png')}}" width="45px" />
                 @endif
             </div>
             <div class="admin-info">
                 <div class="font-strong">{{auth()->user()->name}}</div><small>{{ ucfirst(auth()->user()->role)}}</small>
             </div>
         </div>
         <ul class="side-menu metismenu">
             <li class="">
                 <a class="active" href="{{ route('admin.index') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                     <span class="nav-label">Dasboard</span>
                 </a>
             </li>
             <li class="heading">FEATURES</li>

             <li class="{{ ($_panel == 'Banner' || $_panel == 'Popup' || $_panel == 'Carrers'|| $_panel == 'Location' || $_panel == 'Types' ) ? 'active' : '' }}">
                 <a href=" javascript:;"><i class="sidebar-item-icon fa fa-briefcase"></i>
                     <span class="nav-label">Widgets</span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a class="{{ ($_panel == 'Banner') ? 'active' : '' }}" href="{{ route('admin.banner.index')}}"><i class="sidebar-item-icon fa fa-slideshare"></i>Banner</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Location') ? 'active' : '' }}" href="{{ route('admin.location.index')}}"><i class="sidebar-item-icon fa fa-briefcase"></i>Location</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Types') ? 'active' : '' }}" href="{{ route('admin.types.index')}}"><i class="sidebar-item-icon fa fa-briefcase"></i>Property Status</a>
                     </li>
                   
                      <!-- <li>
                         <a class="{{ ($_panel == 'Popup') ? 'active' : '' }}" href="#"><i class="sidebar-item-icon fa fa-briefcase"></i>Papup Notification</a>
                     </li> -->
                 </ul>
             </li>



             <li class="{{ ($_panel == 'Blog Category' || $_panel == 'Blog' || $_panel == 'Section' || $_panel == 'Posts' || $_panel == 'Pages' ||  $_panel == 'Offers' ||  $_panel == 'Programs'|| $_panel == 'Clients'  ||  $_panel == 'Counter') ? 'active' : '' }}">
                 <a href=" javascript:;"><i class="sidebar-item-icon fa fa-bars"></i>
                     <span class="nav-label">Content Management</span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a class="{{ ($_panel == 'Blog Category') ? 'active' : '' }}" href="{{ route('admin.blogcategory.index')}}"><i class="sidebar-item-icon fa fa-briefcase"></i> Category</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Posts') ? 'active' : '' }}" href="{{ route('admin.blog.index')}}"><i class="sidebar-item-icon fa fa-clipboard"></i>Posts</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Pages') ? 'active' : '' }}" href="{{ route('admin.page.index')}}"> <i class="sidebar-item-icon fa fa-file-o"></i>Pages</a>
                     </li>
                    
                  
                     <li>
                         <a class="{{ ($_panel == 'Section') ? 'active' : '' }}" href="{{ route('admin.section.index')}}"><i class="sidebar-item-icon fa fa-columns" aria-hidden="true"></i>Services</a>
                     </li>
                     <!-- <li>
                         <a class="{{ ($_panel == 'Offers') ? 'active' : '' }}" href="{{ route('admin.offer.index')}}">What Do We Offer</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Programs') ? 'active' : '' }}" href="{{ route('admin.program.index')}}">Program Packages</a>
                     </li>
                     
                     <li>
                         <a class="{{ ($_panel == 'Section') ? 'active' : '' }}" href="{{ route('admin.section.index')}}">Section</a>
                     </li>
                    
                     <!-- <li>
                         <a class="{{ ($_panel == 'Blog') ? 'active' : '' }}" href="#"> Files</a>
                     </li> -->
                     <!-- <li>
                         <a class="{{ ($_panel == 'Clients') ? 'active' : '' }}" href="{{ route('admin.clients.index')}}"><i class="sidebar-item-icon fa fa-id-card" aria-hidden="true"></i>Partner List</a>
                     </li> -->

                 </ul>
             </li>

             
             <li class="{{ ($_panel == 'Menus') ? 'active' : '' }}">
                 <a class="" href="{{ route('admin.menu.index')}}"><i class="sidebar-item-icon fa fa-bars"></i>
                     <span class="nav-label">Menus</span>
                 </a>
             </li>
             <li class="{{ ($_panel == 'Testimonial') ? 'active' : '' }}">
                 <a class="" href="{{ route('admin.testimonial.index')}}"><i class="sidebar-item-icon fa fa-male"></i>
                     <span class="nav-label">Testimonials</span>
                 </a>
             </li>
             <li class="{{ ($_panel == 'Gallery') ? 'active' : '' }}">
                 <a class="" href="{{ route('admin.gallery.index')}}"><i class="sidebar-item-icon fa fa-picture-o"></i>
                     <span class="nav-label">Gallery</span>
                 </a>
             </li>
             <li class="{{ ($_panel == 'Staff') ? 'active' : '' }}">
                 <a class="" href="{{ route('admin.staff.index')}}"><i class="sidebar-item-icon fa fa-users"></i>
                     <span class="nav-label">Staff</span>
                 </a>
             </li>

            
             <li class="{{ ($_panel == 'Setting' || $_panel == 'Social Profile' || $_panel == 'User Profile'  || $_panel == 'Language' ) ? 'active' : '' }}">
                 <a href=" javascript:;"><i class="sidebar-item-icon fa fa-cogs"></i>
                     <span class="nav-label">Setting</span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a class="{{ ($_panel == 'Setting') ? 'active' : '' }}" href="{{ route('admin.setting.index')}}"><i class="sidebar-item-icon fa fa-cog"></i>Setting</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Social Profile') ? 'active' : '' }}" href="{{ URL::route('admin.setting.social.index') }}"><i class="sidebar-item-icon fa fa-heart"></i>Social Link</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'Language') ? 'active' : '' }}" href="{{ URL::route('admin.language.index') }}"><i class="sidebar-item-icon fa fa-globe"></i>Language</a>
                     </li>
                     <li>
                         <a class="{{ ($_panel == 'User Profile') ? 'active' : '' }}" href="{{ route('admin.user_profile.show')}}"><i class="sidebar-item-icon fa fa-user"></i>Profile & Security</a>
                     </li>
                 </ul>
             </li>
             <li class="">
                 <a href=" javascript:;"><i class="sidebar-item-icon fa fa-users"></i>
                     <span class="nav-label">User & Roles</span><i class="fa fa-angle-left arrow"></i></a>
                 <ul class="nav-2-level collapse">
                     <li>
                         <a class="" href="{{ route('admin.users.index')}}">Users</a>
                     </li>
                     <li>
                         <a class="" href="{{ route('admin.roles.index')}}">Roles</a>
                     </li>
                 </ul>
             </li>
             <!-- <li class="">
                 <a href="#"><i class="sidebar-item-icon fa fa-bars"></i>
                     <span class="nav-label">Menus </span>
                 </a>
             </li> -->




         </ul>
     </div>
 </nav>
 <!-- END SIDEBAR-->