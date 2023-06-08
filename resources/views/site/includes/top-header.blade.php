<div class="top-bar-area inc-pad bg-dark text-light">
    <div class="container-full">
        <div class="row align-center">
            <div class="col-lg-6 info">
                <ul>
                    @if($all_view['setting']->site_email)
                    <li>
                        <i class="fas fa-envelope-open"></i> {{ ($all_view['setting']->site_email) }}
                    </li>
                    @endif
                    @if($all_view['setting']->site_phone)
                    <li>
                        <i class="fas fa-phone"></i> {{ ($all_view['setting']->site_phone) }}
                    </li>
                    @endif
                    @if($all_view['setting']->site_mobile)
                    <li>
                        <i class="fas fa-phone"></i> {{ ($all_view['setting']->site_mobile) }}
                    </li>
                    @endif
                </ul>
            </div>
            <div class="col-lg-6 text-right item-flex">

                <div class="social">
                    <ul>
                        <li>
                            <a href="{{ asset($all_view['setting']->social_profile_fb) }}">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset($all_view['setting']->social_profile_twitter) }}">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{ asset($all_view['setting']->social_profile_linkedin) }}">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>