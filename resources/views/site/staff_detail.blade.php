@extends('site.layouts.app')

@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="container">
        <div class="content">
            <h1>Message From <span>Members</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{ route('site.index')}}">Home</a></li>
                <li>Pages</li>
                <li>Members</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<section class="ceo-section1">

    <div class="container">
        <div class="row">
            <div class="col-lg-8 padding-0 wow bounceInLeft" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: bounceInLeft;">
                <div class=" main-part-2">
                    <div class="ceo_title_wrapper">
                        <h2 class="ceo-title about-span mb-50">
                            {{ $data['row']->name }}
                        </h2>
                    </div>
                    <div class="ceo_title_wrapper__ceo-content mb-40">
                        <p>{{ $data['row']->description }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-5 padding-0 wow bounceInRight" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: bounceInRight;">
                <div class="about_wrapper__groups">
                    <img src="{{ asset( $data['row']->image)}}" class="rounded" alt="">

                </div>
            </div>
        </div>
    </div>


</section>

<!-- End Services Section -->
@endsection
@section('js')
@endsection