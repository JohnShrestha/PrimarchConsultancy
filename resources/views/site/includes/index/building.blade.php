<section class="featured portfolio">
    <!-- bg-black-1 was removed -->
    <div class="container">
        <div class="row">
            @if(isset($data['category'][0]))
            <div class="section-title col-md-5">
                <h3 style="color:black">Featured</h3>
                <h2>{{ $data['category'][1]->title }}</h2>
            </div>
            @endif
        </div>
        <div class="row portfolio-items">
            @if(isset($data['category'][1]))
            @if(isset($data['cat_post_'.$data['category'][1]->title]))
            @foreach($data['cat_post_'.$data['category'][1]->title] as $row)
            <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                <div class="project-single" data-aos="zoom-in" data-aos-delay="150">
                    <div class="listing-item compact">
                        <a href="{{ route('site.post.show', ['id' => $row->post_unique_id]) }}" class="listing-img-container">
                            <div class="listing-badges">
                                <span class="featured">Rs. {{$row->price}}</span>
                                <span style="background-color:@if(isset($row->postTypes)){{ $row->postTypes->types == "For Sale" ? "red" : "green" }} @endif">@if(isset($row->postTypes)) {{ $row->postTypes->types }} @endif</span>
                            </div>
                            <div class="listing-img-content">
                                <span class="listing-compact-title">{{ $row->title }} <i>@if(isset($row->LocationTypes)) {{ $row->LocationTypes->title }} @endif</i></span>
                                <ul class="listing-hidden-content">
                                    <li>Area <span>{{$row->area}}</span></li>
                                    
                                </ul>
                            </div>
                            <img src="{{asset( $row->thumbs )}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
            @endif

        </div>
        @if(isset($data['category'][1]))
        @if(Route::has('site.category.show'))
        <div class="bg-all">
            <a href="{{route('site.category.show',['id' => $data['category'][1]->id])}}" class="btn btn-outline-light">View All</a>
            <!-- properties-full-grid-1.html -->
        </div>
        @endif
        @endif
    </div>
</section>