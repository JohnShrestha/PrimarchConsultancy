<section class="main-slider style-four">
    <div class="main-slider-carousel owl-carousel owl-theme">
        @if(!empty($data['banner']))
        @foreach($data['banner'] as $row )

        <div class="slide" style="background-image:url({{asset( asset($row->image) ) }})">
            <div class="container">
                <div class="content">
                    <div class="title text-white">{{ $row->title }}</div>
                    <div class="text">{{ $row->description }} </div>
                    <div class=" link-box ">
                        <a href="{{ route('site.contact') }}" class="theme-btn btn-style-twelve ">Let’s start now <span class="fa fa-angle-right "></span></a>
                        <a href="#" class="theme-btn btn-style-thirteen ">Our services <span class="fa fa-angle-right "></span></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif

    </div>
    <!--End Slide Info Boxed-->

</section>