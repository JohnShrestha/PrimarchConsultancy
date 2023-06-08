<section class="who-we-are ptb-100" id="about">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="2000">
                <div class="who-we-are-image">
                    @if($data['about'])
                    <img src="{{ asset($data['about']->image )}}" alt="image">
                    @endif
                </div>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="2000">
                @if($data['about'])
                <div class="who-we-are-content">
                    <span>{{ $data['about']->title }}</span>
                    <p>{!! $data['about']->description !!}</p>
                    <ul class="who-we-are-list">
                        <li>
                            <span>1</span> Homelike Environment
                        </li>
                        <li>
                            <span>2</span> Quality Educators[]
                        </li>
                        <li>
                            <span>3</span> Safety and Security
                        </li>
                        <li>
                            <span>4</span> Play to Learn
                        </li>
                    </ul>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="who-we-are-shape">
        <img src="{{ asset('assets/site/img/who-we-are/who-we-are-shape.png')}}" alt="image">
    </div>
</section>