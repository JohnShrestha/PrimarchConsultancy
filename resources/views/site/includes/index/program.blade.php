<section class="class-area pb-70" id="program">
    <div class="container">
        <div class="section-title">
            <span>Our Programs</span>
            <h2>Program Packages For Kids</h2>
        </div>
        <div class="row">
            <div class="activities-slides owl-carousel owl-theme">
                @if(!empty($data['program']))
                @foreach($data['program'] as $row )
                <div class="item">
                    <div class="single-class">
                        <div class="class-image">
                            <a href="#">
                                <img src="{{asset( $row->image )}}" alt="image">
                            </a>
                        </div>
                        <div class="class-content">

                            <h3>
                                <a href="#">{{ $row->title }}</a>
                            </h3>

                            <ul class="class-list">
                                <li>
                                    <span>Age:</span> {{$row->age}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>


        </div>
    </div>

</section>