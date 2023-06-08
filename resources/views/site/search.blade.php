@extends('site.layouts.app')
@section('css')
@endsection
@section('content')
<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-list featured portfolio blog">
    <div class="container">
        <section class="headings-2 pt-0 pb-0">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <div class="text-heading text-left">
                            <p><a href="index.html">Buildings </a> &nbsp;/&nbsp; <span>Listings</span></p>
                        </div>
                        <h3>Latest @if(isset($data['rows']->postCategory)) {{ $data['rows']->postCategory->title }} @endif </h3>
                    </div>
                </div>
            </div>
        </section>

        <section class="headings-2 pt-0">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <div class="text-heading text-left">
                            <p class="font-weight-bold mb-0 mt-3">{{$data['cat_count']}} Search results</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </section>
        <div class="row portfolio-items">
            @if(count($data['rows']) != 0)
            @foreach($data['rows'] as $key => $row)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single" data-aos="zoom-in" data-aos-delay="150">
                    <div class="listing-item compact">
                        <a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}" class="listing-img-container">
                            <div class="listing-badges">
                                <span class="featured">Rs. {{$row->price}}</span>
                                <span style="background-color:@if(isset($row->postTypes)){{ $row->postTypes->types == "For Sale" ? "red" : "green" }} @endif">@if(isset($row->postTypes)) {{ $row->postTypes->types }} @endif</span>
                            </div>
                            <div class="listing-img-content">
                                <span class="listing-compact-title">{{ $row->title }}<i>@if(isset($row->LocationTypes)) {{ $row->LocationTypes->title }} @endif</i></span>
                                <ul class="listing-hidden-content">
                                    <li>Area <span>{{$row->area}}</span></li>

                                </ul>
                            </div>
                            <img src="{{ asset($row->thumbs)}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @else
            <p> No Record found !</p>
            @endif

        </div>


    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->
@endsection
@section('js')
<script src="{{ asset('assets/site/js/popper.min.js')}}"></script>

<script>
    $(".dropdown-filter").on('click', function() {

        $(".explore__form-checkbox-list").toggleClass("filter-block");

    });
</script>
@endsection