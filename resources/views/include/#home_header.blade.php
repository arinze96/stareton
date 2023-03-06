<header style='z-index: 2500'>
    <div class="cryptco-main-menu one_page  hidden-xs hidden-sm header--fixed headrooma">
        <div class="cryptco_nav_area fluid">
            <div class="container">
                <div class="row align-items-center logo-left">
                    <div class="col-lg-2 col-sm-4">
                        <div class="logo">
                            <a class="main_sticky" href="{{ route('app.home') }}" title="cryptco">
                                <img src="{{ asset('new3/assets/images/Stareton_Finance_Logo_2.png') }}" alt="cryptco"
                                    class="w-100" />
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-10 col-sm-8 phone_menu">

                        <nav class="cryptco_menu main-search-menu ">
                            <div class="navbar-header d-lg-none">
                                <button type="button" id="show-themability_megamenu" data-toggle="collapse"
                                    class="navbar-toggle">
                                    <i class="fa-solid fa-bars"></i>
                                </button>
                            </div>
                            <div class="main-menu-outer">
                                <div class="d-lg-none menu_title">Menu<i class="fa-solid fa-xmark"></i></div>
                                <ul class="main-menu nav_scroll">
                                    <li style="padding: 20px;"><a href="{{ route('app.home') }}"
                                            style="font-size: 10px">Home</a></li>
                                   

                                    <li style="z-index: 3800; margin-right: 20px">
                                        <label class="dropdown">

                                            <div class="dd-button">
                                                Company
                                            </div>

                                            <input type="checkbox" class="dd-input" id="test">

                                            <ul class="dd-menu">
                                                <li ><a
                                                    href="{{ route('about') }}" style="font-size: 10px">About</a>
                                            </li>
                                            <li><a href="{{ route('faq') }}"
                                                    style="font-size: 10px">FAQs</a></li>
                                            <li><a
                                                    href="{{ route('what-we-offer') }}" style="font-size: 10px">What
                                                    we offer</a></li>
                                            {{-- <li><a href="{{ route('team') }}"
                                                    style="font-size: 10px">our team</a></li> --}}
                                            </ul>

                                        </label>
                                    </li>


                                    <li style="z-index: 2800">
                                        <label class="dropdown">

                                            <div class="dd-button">
                                                Investments
                                            </div>

                                            <input type="checkbox" class="dd-input" id="test">

                                            <ul class="dd-menu">
                                                <li><a href="{{ route('real_estate') }}" style="font-size: 10px">Real
                                                        Estate</a></li>
                                                <li><a style="font-size: 10px" href="{{ route('investments') }}">Investment Plans</a></li>
                                                <li><a href="{{ route('retirement') }}"
                                                        style="font-size: 10px">Retirement</a></li>
                                                <li><a href="{{ route('children-account') }}"
                                                        style="font-size: 10px">Children Account</a>
                                                </li>
                                                <li><a href="{{ route('nfp') }}" style="font-size: 10px">NFP</a></li>
                                                {{-- <li><a href="{{ route('nfp') }}" style="font-size: 10px">Escrow</a> --}}
                                                <li><a href="{{ route("loans") }}" style="font-size: 10px">Loans</a>
                                                </li>
                                            </ul>

                                        </label>
                                    </li>


                                    <li style="padding: 20px;"><a href="{{ route('charity') }}"
                                            style="font-size: 10px">Charity</a></li>
                                    <li style="padding: 20px;"><a href="{{ route('user.login') }}"
                                            style="font-size: 10px">Login</a></li>

                                    <li style="padding: 20px;"><a href="{{ route('user.register') }}"
                                            style="font-size: 10px">Register</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
