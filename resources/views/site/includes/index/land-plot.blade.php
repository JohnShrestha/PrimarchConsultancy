<section class="featured portfolio ho-17 ">
    <!-- bg-black-2 was removed -->
    <div class="container">
        <div class="row">
            <div class="section-title col-md-5">
                @if(isset($data['category'][0]))
                <h3 style="color:black">Featured</h3>
                <h2>{{ $data['category'][0]->title }}</h2>
                @endif
            </div>
        </div>
        <div class="row portfolio-items">
            @if(isset($data['category'][0]))
            @if(isset($data['cat_post_'.$data['category'][0]->title]))
            @foreach($data['cat_post_'.$data['category'][0]->title] as $row)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}" class="recent-16" data-aos="zoom-in" data-aos-delay="150">
                    <div class="recent-img16 img-center" style="background-image: url({{asset( $row->thumbs )}});"></div>
                    <div class="recent-content">
                        <div class="listing-badges">
                            <span>@if(isset($row->postTypes)) {{ $row->postTypes->types }} @endif</span>
                        </div>
                    </div>
                    <div class="recent-details">
                        <div class="recent-title">{{ $row->title }}</div>
                        <div class="recent-price"><span>Rs.</span> {{$row->price}}</div>
                        <div class="house-details">{{$row->area}}</div>
                    </div>
                    <div class="view-proper">View Details</div>
                </a>
            </div>
            @endforeach
            @endif
            @endif
        </div>
        @if(isset($data['category'][0]))
        @if(Route::has('site.category.show'))
        <div class="bg-all">
            <a href="{{route('site.category.show',['id' => $data['category'][0]->id])}}" class="btn btn-outline-light">View All</a>
            <!-- properties-full-grid-1.html -->
        </div>
        @endif
        @endif
    </div>
</section>