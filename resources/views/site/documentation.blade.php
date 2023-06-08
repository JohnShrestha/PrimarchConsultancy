@extends('site.layouts.app')
@section('content')
<div class="service-title">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="title-text text-center">
                <h2>Study Abroad</h2>
                <ul>
                    <li><a href="{{route('site.index')}}">Home</a></li>
                    <li>
                        {{ $data['row']->title }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="service-style-four pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="document-content">
                <p>{!! $data['row']->documentation !!}</p>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="service-category">
                    <h3>Country</h3>
                    <ul>
                        <li>
                            <a href="#">
                                Study in USA
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Study in Canada
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Study in New Zealand
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Study in UK
                                <i class="icofont-arrow-right"></i>
                            </a>
                        </li>

                    </ul>
                </div>
                <div class="tags">
                    <h3>Test Preparation</h3>
                    @if($data['test-prepration'])
                    @foreach($data['test-prepration'] as $row)
                    <a href="{{ route('site.post.show', ['id'=> $row->post_unique_id,]) }}">{{ $row->title }}</a>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection