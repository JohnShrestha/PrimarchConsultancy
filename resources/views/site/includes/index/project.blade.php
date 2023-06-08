<div class="event-area carousel-shadow default-padding bg-gray">

    <!-- Fixed Shape -->
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                @if(isset($data['category'][0]))
                    <h5>{{ $data['category'][0]->title }}</h5>
                    <h2>
                        Join to our upcoming projects <br> and get involved with us
                    </h2>
                @endif
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="event-items event-carousel owl-carousel owl-theme">
            <!-- Single Item  -->
            @if(isset($data['category'][0]))
            @if(isset($data['cat_post_'.$data['category'][0]->title]))
            @foreach($data['cat_post_'.$data['category'][0]->title] as $row)
            <div class="item">
                <div class="thumb">
                    <img src="{{asset( $row->thumbs )}}" alt="Thumb">

                </div>
                <div class="info">
                    <div class="info-top">
                        <div class="date">
                            <i class="fas fa-calendar"></i> {{ date('M, Y', strtotime($row->created_at)) }}
                        </div>
                        <div class="time"><i class="fas fa-map-marker-alt"></i> {{$row->location }}</div>
                    </div>
                    <h4>
                        <a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}">{{ $row->title }}</a>
                    </h4>

                </div>
            </div>
            <!-- End Single Item  -->
            @endforeach
            @endif
            @endif

        </div>
    </div>
</div>