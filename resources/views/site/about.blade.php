@extends('site.layouts.app')

@section('css')
@endsection
@section('content')
<!--Page Title-->
<section class="page-title">
    <div class="container">
        <div class="content">
            <h1>About <span>Us</span></h1>
            <ul class="page-breadcrumb">
                <li><a href="{{route('site.index')}}">Home</a></li>
                <li>Pages</li>
                <li>About Us</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!-- About Section Four -->
<section class="about-section-four">
    <div class="about-overlay"></div>
    <div class="container ">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                </div>
                <div class="section_title_wrapper">
                    @if(isset($data['featured_pages'][0]))
                    <span class="subtitle ">
                        {{ $data['featured_pages'][0]->title }}
                    </span>
                    <div class="section_title_wrapper-about-content ">
                        <p>{!! mb_strimwidth($data['featured_pages'][0]->description, 0, 1000, "...") !!}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 ">
                @if(isset($data['featured_pages'][0]))
                <div class="img-box">
                    <img src="{{ asset($data['featured_pages'][0]->thumbs)}}" alt="about">
                </div>
                @endif
            </div>



        </div>
    </div>
    </div>
    </div>
    </div>
</section>
<!-- End About Section Four -->
<section class="objective-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 mb-30">
                <div class="obj-content">
                    @if(isset($data['featured_pages'][2]))
                    <h2> {{ $data['featured_pages'][2]->title }}</h2>
                    @endif
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-1"></div>
            <div class="col-xxl-10 col-xl-10 col-lg-10 col-md-12 mb-30">
                <div class="obj-points">
                    @if(isset($data['featured_pages'][2]))
                    <ul>
                        {!! mb_strimwidth($data['featured_pages'][2]->description, 0, 1000, "...") !!}
                    </ul>
                    @endif
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
</section>
<!-- Services Section -->
<section class="services-section">
    <div class="container">
        <div class="clearfix">
            @if($data['about'] )
            @foreach($data['about'] as $row)
            <!-- Services Block -->
            <div class="services-block col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <img src="{{ asset($row->image)}}" alt="" class="img img-thumbnail img-responsive" style="font-size: 38px; color: #fff; padding: 15px; padding-top: 55%; margin-bottom: 5px; ">
                    </div>
                    <h5>{{$row->title }}</h5>
                    <div class="text">
                        <p>{!! $row->description !!}</p>
                    </div>

                </div>
            </div>

            @endforeach
            @endif
        </div>
    </div>
</section>
<!-- End Services Section -->
@endsection
@section('js')
@endsection