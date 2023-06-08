<div class="navbar-area">
    <div class="main-responsive-nav">
        <div class="container">
            <div class="main-responsive-menu">
                <div class="logo">
                    @if($all_view['setting']->logo)
                    <a href="{{route('site.index')}}">
                        <img src="{{ asset($all_view['setting']->logo) }}" class="black-logo" @if(isset($all_view['setting']->site_name)) title="{{ $all_view['setting']->site_name }}" @endif alt="image">
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="main-navbar">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                @if($all_view['setting']->logo)
                <a class="navbar-brand" href="{{route('site.index')}}">
                    <img src="{{ asset($all_view['setting']->logo) }}" class="black-logo" alt="image">
                </a>
                @endif

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('site.index')}}" class="nav-link {{ (request()->segment(1) == null) ? 'active' : '' }}">
                                Home

                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#what-we-offer" class="nav-link">
                                what do we offer

                            </a>

                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav-link">
                                About

                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="#curriculum" class="nav-link">
                                Curriculum
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#program" class="nav-link">
                                Our Program
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link">
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>

    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>

            <div class="container">
                <div class="option-inner">
                    <div class="others-options d-flex align-items-center">


                        <div class="option-item">
                            <a href="#" class="default-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>