<!-- mobile menu bar -->
<div class="m-header d-block d-lg-none">
    <div class="container">
        <ul class="m-header__menu d-flex justify-content-between">
            <li class="m-header__menu--li">
                <a href="{{ route('index') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/home1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>Home</p>
                </a>
            </li>
            <li class="m-header__menu--li">
                <a href="{{ route('pages.market') }}" class="m-header__menu--a active regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/market1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>Market</p>
                </a>
            </li>
            <li class="m-header__menu--li">
                <a href="{{ route('pages.shop') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/shop1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>Shop</p>
                </a>
            </li>
            <li class="m-header__menu--li">
                <a href="{{ route('pages.social') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/social1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>Social Programs</p>
                </a>
            </li>
            <li class="m-header__menu--li">
                <a href="{{ route('pages.charities') }}" class="m-header__menu--a regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/charitys1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>Charities</p>
                </a>
            </li>
            <li class="m-header__menu--li">
                <a href="/charities-touch.html" class="m-header__menu--a regular d-flex flex-column align-items-center">
                    <figure class="m-header__menu--figure d-flex justify-content-center">
                        <div class="m-header__menu--icon">
                            <img src="{{ asset('assets/img/svg/menu/news1.svg') }}" class="convert-svg" alt="">
                        </div>
                    </figure>
                    <p>News</p>
                </a>
            </li>
        </ul>
    </div>
</div>