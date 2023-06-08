<section class="services-section-six">
    <div class="container">
        <!-- Sec Title -->
        <div class="section-title-lf text-left">
            @if(isset($data['featured_pages'][1]))

            <span>{{ $data['featured_pages'][1]->title }}</span>
            <p>{!! mb_strimwidth($data['featured_pages'][1]->description, 0, 1000, "...") !!}</p>
            @endif

        </div>

        <div class="outer-container">
            <div class="row clearfix">

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="0ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">1</div>
                            <div class="icon-box">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6>Admission Guidance</h6>


                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">2</div>
                            <div class="icon-box">
                                <i class="fa-solid fa-share-from-square"></i>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6>Application Submit</h6>


                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">3</div>
                            <div class="icon-box">
                                <i class="fa-solid fa-envelope-open-text"></i>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6>Acceptance Letter</h6>

                        </div>
                    </div>
                </div>

                <!-- Services Block Nine -->
                <div class="services-block-nine col-lg-3 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp animated" data-wow-delay="900ms" data-wow-duration="1000ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 900ms; animation-name: fadeInUp;">
                        <div class="icon-outer">
                            <div class="service-number">4</div>
                            <div class="icon-box">
                                <i class="fa-brands fa-cc-visa"></i>
                            </div>
                        </div>
                        <div class="lower-box">
                            <h6>Visa Process</h6>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>