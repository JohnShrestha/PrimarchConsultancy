<div id="map-container" class="fullwidth-home-map dark-overlay">
    <!-- Video -->
    <div class="video-container">
        <video poster="images/bg/video-poster2.png" loop autoplay muted>
            <source src="{{ asset('assets/site/video/7.mp4')}}" type="video/mp4">
        </video>
    </div>
    <div id="hero-area" class="main-search-inner search-2 vid">
        <div class="container vid" data-aos="zoom-in">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-inner2">
                        <!-- Welcome Text -->
                        <div class="welcome-text">
                            <h1 class="mb-2"><span>Find Your Dream</span> Home</h1>
                            <p class="mb-0">We Have Over Million Properties For You.</p>
                        </div>
                        <!--/ End Welcome Text -->
                        <!-- Search Form -->
                        <div class="trip-search vid">
                            <form id="categorie-search-form form" action="{{ Route('site.search') }}">
                                @csrf
                                <!-- Form Location -->
                                <div class="form-group location">
                                    @if (!empty($data['location']))
                                    <select class="wide" name="location_id">
                                        <option selected disabled>Location</option>
                                        @foreach ($data['location'] as $row)
                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <!--/ End Form Location -->
                                <!-- Form Property Type -->
                                <div class="form-group">
                                    @if (!empty($data['category']))
                                    <select class="wide" name="category_id">
                                        <option selected disabled>Property Type</option>
                                        @foreach ($data['category'] as $row)
                                        <option value="{{$row->id}}">{{$row->title}}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <!--/ End Form Property Type -->
                                <!-- Form Property Status -->
                                <div class="form-group ">
                                    @if (!empty($data['types']))
                                    <select class="wide" name="types_id">
                                        <option selected disabled>Property Status</option>
                                        @foreach ($data['types'] as $row)
                                        <option value="{{$row->id}}">{{$row->types}}</option>
                                        @endforeach
                                    </select>
                                    @endif
                                </div>
                                <!--/ End Form Property Status -->
                                <!-- Form Bedrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-arrow-circle-down"></i>Min</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">1.5 Cr</li>
                                            <li data-value="2" class="option">2.5 Cr</li>
                                            <li data-value="3" class="option">3.5Cr</li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bedrooms -->
                                <!-- Form Bathrooms -->
                                <div class="form-group">
                                    <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-arrow-circle-up"></i>Max</span>
                                        <ul class="list">
                                            <li data-value="1" class="option selected">4.5 Cr</li>
                                            <li data-value="2" class="option">6.5 Cr</li>
                                            <li data-value="3" class="option">8.5 Cr+</li>

                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Form Bathrooms -->
                                <!-- Form Button -->
                                <div class="form-group button">
                                    <button type="submit" class="btn">Search</button>
                                </div>
                                <!--/ End Form Button -->
                            </form>
                        </div>
                        <!--/ End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>