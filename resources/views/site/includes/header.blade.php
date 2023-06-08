<header class="main_header">
    <section class="topbar_wrap">
        <div class="container-fluid">
            <div class="topbar_content">
                <marquee>Primarch Educational Consultancy</marquee>
            </div>
        </div>
    </section>

    <div class="top_header logo_navigation">
        <div class="container-fluid">
            <div class="navigation_bar">
                @if (route('site.index'))
                    @if (@isset($all_view['setting']))
                        <a class="home-link" href="{{ route('site.index') }}" title="Primarch" rel="home">
                            <img id="logo-img" class="img-center" src="{{ asset($all_view['setting']->logo) }}"
                                alt="logo-img" height="100px" width="100px">
                        </a>
                    @endif
                @endif
                <nav id="menu" class="menu">
                    <div id='cssmenu' class="clearfix">
                        <ul>

                            @if (isset($data['menu']))
                                @foreach ($data['menu'] as $row)
                                    <li class="@if (array_key_exists('child', $row)) dropdown @endif nav-item nav-item-top">
                                        <a class="@if (array_key_exists('child', $row)) dropdown-toggle @endif nav-link fs-1 "
                                            href="{{ url($row['url']) }}" target="{{ $row['target'] }}"
                                            @if (array_key_exists('child', $row)) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>{{ $row['menu_name'] }}</a>
                                        @if (array_key_exists('child', $row))
                                            <ul>
                                                @foreach ($row['child'] as $child)
                                                    <li
                                                        class="@if (array_key_exists('child', $child)) dropdown @endif nav-item">
                                                        <a class="@if (array_key_exists('child', $child))  @endif nav-link fs-1"
                                                            href="{{ url($child['url']) }}"
                                                            target="{{ $child['target'] }}"
                                                            @if (array_key_exists('child', $child)) id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" @endif>{{ $child['menu_name'] }}</a>
                                                        @if (array_key_exists('child', $child))
                                                            <ul>
                                                                @foreach ($child['child'] as $ch)
                                                                    <li><a class="nav-link "
                                                                            href="{{ url($ch['url']) }}" class="fs-1"
                                                                            target="{{ $ch['target'] }}">{{ $ch['menu_name'] }}</a>
                                                                    </li>
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

                </nav>
            </div>
        </div>

</header>
