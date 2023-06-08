<section class="about-section-four bg-img-1">
    <div class="about-overlay"></div>
    <div class="container ">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30">
                <div class="cmt-col-wrapper-bg-layer cmt-bg-layer">
                    <div class="cmt-col-wrapper-bg-layer-inner"></div>
                </div>
                <div class="section_title_wrapper">
                    @if(isset($data['featured_pages'][0]))
                    <span class="subtitle ">
                        {{ $data['featured_pages'][0]->title }}
                    </span>
                    <div class="section_title_wrapper-about-content ">
                        <p>{!! mb_strimwidth($data['featured_pages'][0]->description, 0, 1000, "...") !!}</p>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 mb-30 ">
                @if(isset($data['featured_pages'][0]))
                <div class="img-box">
                    <img src="{{ asset($data['featured_pages'][0]->thumbs)}}" alt="about">
                </div>
                @endif
            </div>
            



        </div>
    </div>
    </div>
    </div>
    </div>
</section>