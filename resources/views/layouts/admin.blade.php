@include('admin.section.header')

@include('admin.section.top-nav')
@include('admin.section.sidebar')
<div class="content-wrapper">
    <!-- START PAGE CONTENT-->
    <div class="page-content fade-in-up">
        @yield('content')
    </div>
    @include('admin.section.copy')
</div>
@include('admin.section.footer')
