<div class="service-area carousel-shadow default-padding bg-gray">
    <!-- Fixed Shape -->
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                @if(isset($data['category'][1]))
                    <h5>What We Do</h5>
                    <h2>
                    {{ $data['category'][1]->title }}
                    </h2>
                @endif
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="event-grid-items">
            <div class="row">
                @if(isset($data['category'][1]))
                @if(isset($data['cat_post_'.$data['category'][1]->title]))
                @foreach($data['cat_post_'.$data['category'][1]->title] as $row)
                <!-- Single Item  -->
                <div class="col-md-6">
                    <div class="item">
                        <div class="row">

                            <div class="thumb col-lg-5">
                                <img src="{{asset( $row->thumbs )}}" alt="">
                            </div>
                            <div class="info col-lg-7">
                                <ul class="date">
                                    <li>
                                        <i class="fas fa-map-marker-alt"></i> {{ $row->location }}
                                    </li>
                                    <li>
                                        <i class="fas fa-calendar-alt"></i> {{ date('M, Y', strtotime($row->created_at)) }}
                                    </li>
                                </ul>
                                <h6>
                                    <a href="{{ route('site.post.show', ['id'=> $row->post_unique_id]) }}">{{ $row->title }}</a>
                                </h6>
                                <p>
                                    {!! mb_strimwidth($row->description, 0, 150, "...") !!}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Item  -->
                @endforeach
                @endif
                @endif
            </div>
        </div>

    </div>
</div>