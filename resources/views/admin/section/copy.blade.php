 <!-- END PAGE CONTENT-->
 <footer class="page-footer">
     <div class="font-13" style="margin-left: 10rem;"><b><a href="">{{ date('Y') }} &copy; Prabidhi Enterprises Content Management System (PECMS). Page rendered in {{ date('s', $_SERVER['REQUEST_TIME_FLOAT']) }} Seconds.@if(isset(Auth::user()->last_login_at)) Your IP Address is {{ Auth::user()->last_login_ip }} & Login Time is {{ Auth::user()->last_login_at }}<strong>[{{ Auth::user()->last_login_at->diffForHumans() }}]</strong>@endif</a></b></div>
 </footer>