<!-- latest blog -->

<section class="blog-left-img-section">
    <div class="container">
        <!-- Sec Title -->
        <div class="section-title-lf text-left">
            <span>Our Blog</span>
            <h2>Our New Blog Post</h2>
            <p>We are devoted to help a wide range of students. Munal Education understands the need to personalize your needs.
            </p>
        </div>
        <!-- row -->
        @if(isset($data['blog']))

        <div class="row">
            @foreach($data['blog'] as $row)

            <div class="col-lg-6 col-sm-12 col-md-6 col-xs-12 pr-20">
                <!-- featured-imagebox-post -->
                <div class="row no-gutters featured-imagebox featured-imagebox-post ttm-box-view-left-image box-shadow">
                    <div class="col-lg-5 col-md-12 col-sm-6 ttm-featured-img-left">
                        <div class="featured-thumbnail">
                            <a href="{{ route('site.post.show', ['id'=> $row->post_unique_id]) }}">
                                <img class="img-fluid" src="{{asset($row->thumbs)}}" alt="image">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-sm-6 featured-content featured-content-post">
                        <div class="post-meta">
                            <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{ date('F d, Y', strtotime($row->created_at)) }}</span>
                        </div>
                        <div class="post-title featured-title">
                            <h5><a href="{{ route('site.post.show', ['id'=> $row->post_unique_id]) }}">{{$row->title}}</a></h5>
                        </div>
                        <div class="featured-desc ttm-box-desc">
                            <p>{!! strlen($row->content) > 150 ? substr($row->content,0,150).'...' : $row->content !!}</p>
                        </div>

                    </div>
                </div>
                <!-- featured-imagebox-post end-->
            </div>
            @endforeach
        </div>
        @endif
        <!-- row end-->
    </div>
</section>