@extends('site.layouts.app')

@section('css')
@endsection
@section('content')
<div class="gallery-main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="gallery-headeing text-center">
                    <h1 class="mb-2" style="text-transform: none;">Gallery</h1>

                </div>

            </div>
        </div>
        <div class="row">
            <div class=" col-md-12 text-center">
                <p class="btn btn-warning text-white">Home</p>
                <p class="btn btn-warning text-white">Gallery</p>
            </div>
        </div>
    </div>
</div>
<!-- START SECTION Gallery -->
<div class="container ">
    <div class="gallery py-4">
        @if(count($data['gallery']) != 0)
        @foreach($data['gallery'] as $row)
        <a href="{{$row->image}}">
            <img src="{{$row->image}}" alt="TITLE 1">
        </a>
        @endforeach
        @else
        <p> No Record found !</p>
        @endif
    </div>
</div>
<!-- END SECTION Gallery -->
@endsection
@section('js')
@endsection