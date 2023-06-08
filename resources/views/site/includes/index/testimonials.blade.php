<section class="testimonial-section-three ">
    <div class="container ">
        <!-- Sec Title Two -->
        <div class="sec-title-three centered ">
            <div class="title ">Testimonial</div>
            <h2>What our Student think about us</h2>
        </div>
        <div class="two-item-carousel owl-carousel owl-theme ">
            @if(isset($data['testimonial']))
            @foreach($data['testimonial'] as $row)
            <!-- Testimonial Block Four -->
            <div class="testimonial-block-four ">
                <div class="inner-box ">
                    <div class="quote-icon flaticon-double-quotes "></div>
                    <div class="image-outer ">
                        <div class="image ">
                            <img src="{{ asset( $row->image )}}" alt=" " />
                        </div>
                    </div>
                    <div class="text ">{!! mb_strimwidth($row->description, 0, 250, "...") !!}</div>
                    <h5>{{$row->name }}</h5>
                    <div class="designation ">{{$row->position }}</div>
                </div>
            </div>
            @endforeach
            @endif


        </div>

    </div>
</section>
