<div class="topbar" id="toolbar">
    <div class="container">
        <div class="row">
            <div class="top-left col-lg-8">
                <ul class="top-list">
                    @if($all_view['setting']->site_email)
                    <li>
                        <i class="fa-solid fa-envelope"></i> <a href="mailto:info@kidzeeboudha.com">{{ ($all_view['setting']->site_first_address) }}</a>
                    </li>
                    @endif
                    @if($all_view['setting']->site_phone)
                    <li>
                        <i class="fa-solid fa-phone"></i> <a href="tel:+977 9801313366"> {{ ($all_view['setting']->site_phone) }}</a>
                    </li>
                    @endif
                    @if($all_view['setting']->site_mobile)
                    <li>
                        <i class="fa-solid fa-phone"></i> <a href="tel:+977 9801313366"> {{ ($all_view['setting']->site_mobile) }}</a>
                    </li>
                    @endif

                    @if($all_view['setting']->site_email)
                    <li>
                        <i class="fa-solid fa-location-dot"></i> {{ ($all_view['setting']->site_first_address) }}
                    </li>
                    @endif
                </ul>
            </div>
            <div class="top-right col-lg-4">
                <div class="item-socials">
                    <a title="Facebook" href="{{ asset($all_view['setting']->social_profile_fb) }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    <a title="Instagram" href="{{ asset($all_view['setting']->social_profile_insta) }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a title="Twitter" href="{{ asset($all_view['setting']->social_profile_twitter) }}" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>