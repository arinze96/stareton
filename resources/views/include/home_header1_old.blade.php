<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    <p><i class="fa fa-phone" aria-hidden="true"></i> <span style="color:black">(234) 0200 17813</span> </p>
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span style="color:black"> 95 South Park Ave, Switzerland</span></p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <span style="color:black">info@gobiz.com</span></p>
                </div>
            </div>
            <div class="top-social hidden-sm-down">
                <div class="social-icons-header">
                    <div class="social-icons">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom heading sticky-header" id="heading" style="  background-color: #03a9f5;">
        <div class="container">
            <!-- STAR MOBILE LOGO -->
            <a href="{{route('app.home')}}" class="logo">
                <img src="{{asset('assets/images/background/MT_Trans_2.png')}}" alt="businesspro">
            </a>
            <!-- END MOBILE LOGO -->
            <div class="get-quote hidden-lg-down" style="background-color: #0f1341;">
                <a data-scroll href="{{route('user.contact')}}">
                    <p>CONTACT US</p>
                </a>
            </div>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true" style="color: #0f1341;"></i>
            </button>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true" style="color: #0f1341;"></i>
            </button>

            <form action="#" id="bloq-search" class="collapse">
                <div class="bloq-search">
                    <input type="text" placeholder="search...">
                    <input type="submit" value="Search">
                </div>
            </form>

            <nav id="main-menu" class="collapse">
                <ul>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('app.home')}}" aria-expanded="false">HOME</a>
                        </div>

                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" data-toggle="" aria-haspopup="true" aria-expanded="false" href="{{route('app.home')}}">HOME</a>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('company')}}" aria-expanded="false">COMPANY</a>
                        </div>
                        <div class="collapse" id="about">
                            <div class="card card-block">
                                <a class="dropdown-item" href="about">About Us</a>
                                <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                                <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a>
                                <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                                <a class="dropdown-item" href="{{route('team')}}">Our Team</a>

                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('company')}}">COMPANY</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about">About Us</a>
                            <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                            <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a>
                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                            <a class="dropdown-item" href="{{route('team')}}">Our Team</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="collapse" href="{{route('investments')}}" aria-expanded="false">INVESTMENTS</a>
                        </div>
                        <div class="collapse" id="services">
                            <div class="card card-block">
                                <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                                <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a>
                                <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">Cryptocurrency Plans</a>
                                <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                                <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                            </div>
                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('investments')}}">INVESTMENTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                            <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a>
                            <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">Cryptocurrency Plans</a>
                            <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                            <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="" href="{route('charity')}}" aria-expanded="false">CHARITY</a>
                        </div>

                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" aria-haspopup="true" aria-expanded="false" href="{{route('charity')}}">CHARITY</a>

                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <li class="hidden-lg-up">
                        <div class="po">
                            <a data-toggle="" href="{{route('user.login')}}" aria-expanded="false">LOGIN</a>
                        </div>
                        <div class="" id="blog">

                        </div>
                    </li>
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" aria-haspopup="true" aria-expanded="false" href="{{route('user.login')}}">LOGIN</a>

                    </li>
                    <li><a href="{{route('user.register')}}">REGISTER</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<div class="compare" id="currency">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="coin-box owl-carousel owl-theme">
                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="single"style="background-color: #262B38">
                            <div class="icon">
                                <img src="{{ asset('front/img/coin-icon-1.png') }}" alt=""
                                    class="coin-icon">
                            </div>
                            <div
                                style="width: 100%; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=859&pref_coin_id=1505"
                                        width="100%" height="196px" scrolling="auto" marginwidth="0"
                                        marginheight="0" frameborder="0" border="0"
                                        style="border:0;margin:0;padding:0;line-height:14px;overflow: hidden;"></iframe>
                                </div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
                                        Prices</a>&nbsp;by Coinlib
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                        <div class="single"style="background-color: #262B38">
                            <div class="icon">
                                <img src="{{ asset('front/img/coin-icon-2.png') }}" alt=""
                                    class="coin-icon">
                            </div>
                            <div
                                style="width: 100%; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=145&pref_coin_id=1505"
                                        width="100%" height="196px" scrolling="auto" marginwidth="0"
                                        marginheight="0" frameborder="0" border="0"
                                        style="border:0;margin:0;padding:0;line-height:14px;overflow: hidden;"></iframe>
                                </div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
                                        Prices</a>&nbsp;by Coinlib
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="single"style="background-color: #262B38">
                            <div class="icon">
                                <img src="{{ asset('front/img/coin-icon-3.png') }}" alt=""
                                    class="coin-icon">
                            </div>
                            <div
                                style="width: 100%; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #1D2330; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=6&pref_coin_id=1505"
                                        width="100%" height="196px" scrolling="auto" marginwidth="0"
                                        marginheight="0" frameborder="0" border="0"
                                        style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency
                                        Prices</a>&nbsp;by Coinlib
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="compare-box item wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                        <div class="single"style="background-color: #262B38">
                            <div class="icon">
                                <img src="{{ asset('front/img/coin-icon-4.png') }}" alt=""
                                    class="coin-icon">
                            </div>
                            <div
                                style="width: 100%; height:220px; background-color: #1D2330; overflow:hidden; box-sizing: border-box; border: 1px solid #282E3B; border-radius: 4px; text-align: right; line-height:14px; block-size:220px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #262B38;padding:1px;padding: 0px; margin: 0px;">
                                <div style="height:200px; padding:0px; margin:0px; width: 100%;"><iframe
                                        src="https://widget.coinlib.io/widget?type=single_v2&theme=dark&coin_id=359&pref_coin_id=1505"
                                        width="100%" height="196px" scrolling="auto" marginwidth="0"
                                        marginheight="0" frameborder="0" border="0"
                                        style="border:0;margin:0;padding:0;line-height:14px;overflow: hidden;"></iframe>
                                </div>
                                <div
                                    style="color: #626B7F; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;">
                                    <a href="https://coinlib.io" target="_blank"
                                        style="font-weight: 500; color: #626B7F; text-decoration:none; font-size:11px">Cryptocurrency1
                                        Prices</a>&nbsp;by Coinlib
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
