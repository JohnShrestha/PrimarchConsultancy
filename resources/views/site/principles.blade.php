@extends('site.layouts.app')

@section('css')
@endsection
@section('content')
@include('site.includes.top-header')
@include('site.includes.header-two')
<!-- Start Breadcrumb 
    ============================================= -->
<div class="breadcrumb-area text-center shadow dark bg-fixed padding-xl text-light" style="background-image: url({{ asset('assets/site/img/gallery/28408383860_4935191e6a_o.jpg')}});">
    <div class="container">
        <div class="breadcrumb-items">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Our Principles</h2>
                </div>
            </div>
            <ul class="breadcrumb">
                <li><a href="index.html"><i class="fas fa-home"></i> Home</a></li>
                <li><a href="#">Page</a></li>
                <li class="active">Our Principles</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Breadcrumb -->

<!-- Star About Area
    ============================================= -->
<div class="we-do-area principle default-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Our Principles</h5>
                    <h2>
                        How We Work
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="wedo-items text-center">
            <div class="row">
                @if($data['principles'] )
                @foreach($data['principles'] as $row)
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <img src="{{ asset($row->image)}}" alt="" class="img img-thumbnail img-responsive" width="100px">
                        <h4>{{$row->title }}</h4>
                        <p>{!! $row->description !!}</p>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End About Area -->



@endsection
@section('js')
@endsection