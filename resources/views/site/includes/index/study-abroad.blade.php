<section class="blog-grid-section ">
    <div class="container ">
        <!-- Sec Title -->
        <!-- Sec Title -->
        @if(isset($data['category'][0]))
        <div class="sec-title-three centered ">
            <div class="title ">{{ $data['category'][0]->title }}</div>
            <h2>Select The Country</h2>
        </div>
        @endif
        <div class="blog-carousel owl-carousel owl-theme ">
            @if(isset($data['category'][0]))
            @if(isset($data['cat_post_'.$data['category'][0]->title]))
            @foreach($data['cat_post_'.$data['category'][0]->title] as $row)
            <!-- News Block Three -->
            <div class="news-block-three ">
                <div class="inner-box wow fadeInLeft " data-wow-delay="0ms " data-wow-duration="1500ms ">
                    <div class="image ">
                        <img src="{{asset( $row->thumbs )}}" alt=" " />

                    </div>
                    <div class="lower-content ">
                        <h4><a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}">{{ $row->title }}</a></h4>
                        <p>{!! mb_strimwidth($row->description, 0, 200, "...") !!}</p>
                        <a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}" class="theme-btn btn-style-twelve ">Read More<span class="fa fa-angle-right "></span></a>
                    </div>
                </div>
            </div>

            @endforeach
            @endif
            @endif
        </div>

    </div>
</section>