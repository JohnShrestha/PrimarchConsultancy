<footer class="site-footer layout-3">
    <div class="background-footer">
        <img src="{{ asset('assets/site/img/footer-top.png')}}" alt="IMG">
    </div>
    <div class="footer-sidebars">
        <div class="container">
            <div class="footer-main row">
                <div class="footer-logo text-center">
                    @if($all_view['setting']->logo)
                    <img src="{{ asset($all_view['setting']->logo) }}" alt="">
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="copyright-area-content">
                <p>
                    Copyright @
                    {{ date('Y') }} Kidzee. All Rights Reserved by
                    <a href="{{route('site.index')}}" target="_blank">
                        krennova
                    </a>
                </p>
            </div>
        </div>
    </div>
</footer>