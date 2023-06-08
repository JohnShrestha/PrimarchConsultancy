<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <div class="container-full">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav">
                <ul>
                    <li class="button"><a href="#"><i class="fas fa-heart"></i> Donate</a></li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                @if($all_view['setting']->logo)
                <a class="navbar-brand" href="{{route('site.index')}}">
                    <img src="{{ asset($all_view['setting']->logo) }}" class="logo logo-display" alt="Logo">
                </a>
                @endif
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-center" data-in="fadeInDown" data-out="fadeOutUp">
                    @if(isset($data['menu']))
                    @foreach($data['menu'] as $row)
                    <li class="nav-item  @if(array_key_exists('child', $row))dropdown  @endif">
                        <a class="nav-link @if(array_key_exists('child', $row))dropdown-toggle @endif" href="{{ url($row['url']) }}" target="{{ $row['target'] }}" id="navbarDropdown" role="button" @if(array_key_exists('child', $row)) data-bs-toggle="dropdown" @endif aria-expanded="false">{{ $row['menu_name'] }} </a>
                        @if(array_key_exists('child', $row))
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            @foreach($row['child'] as $child)
                            <li class="@if(array_key_exists('child', $child))dropdown @endif nav-item">
                                <a class="@if(array_key_exists('child', $child))dropdown-toggle @endif nav-link fs-1" href="{{ url($child['url']) }}" target="{{ $child['target'] }}" @if(array_key_exists('child', $child))id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>{{ $child['menu_name'] }}</a>
                                @if(array_key_exists('child', $child))
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    @foreach($child['child'] as $ch)
                                    <li><a class="nav-link " href="{{ url($ch['url']) }}" class="fs-1" target="{{ $ch['target'] }}">{{ $ch['menu_name'] }}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                    @endif

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>