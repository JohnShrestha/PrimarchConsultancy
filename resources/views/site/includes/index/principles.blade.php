<div class="we-do-area principle default-padding">
    <div class="container">

        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading text-center">
                    <h5>Our Principles</h5>
                    <h2>
                        How We Work
                    </h2>
                    <div class="heading-divider"></div>
                </div>
            </div>
        </div>

    </div>
    <div class="container">
        <div class="wedo-items text-center">
            <div class="row">
                @if($data['principles'] )
                @foreach($data['principles'] as $row)
                <!-- Single Item -->
                <div class="single-item col-lg-4 col-md-6">
                    <div class="item">
                        <img src="{{ asset($row->image)}}" alt="" class="img img-thumbnail img-responsive" width="100px">
                        <h4>{{$row->title }}</h4>
                        <p>{!! $row->description !!}</p>
                    </div>
                </div>
                <!-- End Single Item -->
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>