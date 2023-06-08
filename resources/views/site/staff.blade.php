@extends('site.layouts.app')

@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="container">
        <div class="content">
            <h1>Team <span>Members</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('site.index')}}">Home</a></li>
                <li>Pages</li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- Blog Grid Section -->
<section class="team-grid-section ">
    <div class="container ">
        <!-- Sec Title -->
        <!-- Sec Title -->
        <div class="team-title-three centered ">
            <div class="title ">Our Teams</div>
            <h2>Nepal Team Members</h2>
        </div>
        <div class="member-carousel owl-carousel owl-theme ">
            <!-- News Block Three -->
            @if(isset($data['nepal_team']))
            @foreach($data['nepal_team'] as $row)
            <div class="team-block-three ">
                <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                    <div class="image ">
                        <img src="{{ asset($row->image)}}" alt="{{ $row->name }}" />
                    </div>
                    <div class="lower-content ">
                        <h4><a href="{{ route('site.staff.show', ['id' => $row->id]) }}">{{ $row->name }}</a></h4>
                        <p>{!! mb_strimwidth($row->description, 0, 200, "...") !!}</p>
                        <a href="{{ route('site.staff.show', ['id' => $row->id]) }}" class="theme-btn btn-style-twelve ">Read More<span class="fa fa-angle-right "></span></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>


<section class="team-grid-section ">
    <div class="container ">
        <!-- Sec Title -->
        <!-- Sec Title -->
        <div class="team-title-three centered ">
            <!-- <div class="title ">Our Teams</div> -->
            <h2>India Team Members</h2>
        </div>
        <div class="member-carousel owl-carousel owl-theme ">
            <!-- News Block Three -->
            @if(isset($data['india_team']))
            @foreach($data['india_team'] as $row)
            <div class="team-block-three ">
                <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                    <div class="image ">
                    <img src="{{ asset($row->image)}}" alt="{{ $row->name }}" />
                    </div>
                    <div class="lower-content ">
                        <h4><a href="#">{{ $row->name }}</a></h4>
                        <p>{!! mb_strimwidth($row->description, 0, 200, "...") !!}</p>
                        <a href="{{ route('site.staff.show', ['id' => $row->id]) }}" class="theme-btn btn-style-twelve ">Read More<span class="fa fa-angle-right "></span></a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
@section('js')
<script src="{{ asset('assets/site/js/jquery.fancybox.js')}}"></script>
@endsection