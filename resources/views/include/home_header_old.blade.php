<div class="header">
    <div class="header-top">
        <div class="container">
            <div class="top-info hidden-sm-down">
                <div class="call-header">
                    {{-- <p><i class="fa fa-phone" aria-hidden="true"></i> <span style="color:black">(234) 0200 17813</span> </p> --}}
                </div>
                <div class="address-header">
                    <p><i class="fa fa-map-marker" aria-hidden="true"></i><span style="color:black"> 
                        Staretonfinance Schluhmattstrasse 55, Zermatt 3920 Switzerland
                    </span></p>
                </div>
                <div class="mail-header">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> <span style="color:black">support@Gloryinvesmentlimited.com</span></p>
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
    <div class="header-bottom heading sticky-header" id="heading" style="  background-color: #368add;">
        <div class="container">
            <!-- STAR MOBILE LOGO -->
            <a href="{{route('app.home')}}" class="logo">
                <img src="{{asset('assets/images/background/MT_Trans_2.png')}}" alt="businesspro">
            </a>
            <!-- END MOBILE LOGO -->
            <div class="get-quote hidden-lg-down">
                <a data-scroll href="{{route('user.contact')}}">
                    <p>CONTACT US</p>
                </a>
            </div>
            <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                <i class="fa fa-search" aria-hidden="true"></i>
            </button>
            <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                <i class="fa fa-bars" aria-hidden="true"></i>
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
                    <a href="{{route('app.home')}}"  aria-expanded="false" >
                        <li class="hidden-lg-up">
                            <div class="po">
                                HOME
                            </div>
                        </li>
                    </a>
                                       
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" data-toggle="" aria-haspopup="true" aria-expanded="false" href="{{route('app.home')}}">HOME</a>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <a href="{{route('about')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                ABOUT
                            </div>
                        </li>
                    </a>
                    {{-- <a href="{{route('what-we-offer')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                WHAT WE OFFER
                            </div>
                        </li>
                    </a> --}}
                    {{-- <a href="{{route('risk-management')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                RISK MANAGEMENT
                            </div>
                        </li>
                    </a> --}}
                    <a href="{{route('faq')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                FREQUENTLY ASKED QUESTIONS
                            </div>
                        </li>
                    </a>
                    <a href="{{route('team')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                OUR TEAM
                            </div>
                        </li>
                    </a>
                    
                        {{-- <div class="collapse" id="about">
                            <div class="card card-block">
                                <a class="dropdown-item" href="about">About Us</a>
                                <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                                <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a>
                                <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                                <a class="dropdown-item" href="{{route('team')}}">Our Team</a>

                            </div>
                        </div> --}}
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('company')}}">COMPANY</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="about">About Us</a>
                            <a class="dropdown-item" href="{{route('what-we-offer')}}">What We Offer</a>
                            {{-- <a class="dropdown-item" href="{{route('risk-management')}}">Risk Management</a> --}}
                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                            <a class="dropdown-item" href="{{route('team')}}">Our Team</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <a href="{{route('cryptocurrency-plans')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                INVESTMENT PLANS
                            </div>
                        </li>
                    </a>
                    <a href="{{route('real_estate')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                REAL ESTATE
                            </div>
                        </li>
                    </a>
                    <a href="{{route('retirement')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                Retirement
                            </div>
                        </li>
                    </a>
                    <a href="{{route('children-account')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                CHILDREN ACCOUNT
                            </div>
                        </li>
                    </a>
                    
                        {{-- <div class="collapse" id="services">
                            <div class="card card-block">
                                <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                                <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a>
                                <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">investment Plans</a>
                                <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                                <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                            </div>
                        </div> --}}
                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="{{route('investments')}}">INVESTMENTS</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('real_estate')}}">Real Estate</a>
                            <a class="dropdown-item" href="{{route('nfp')}}">NFP</a>
                            {{-- <a class="dropdown-item" href="{{route('market-analysis')}}">Market Analysis</a> --}}
                            <a class="dropdown-item" href="{{route('cryptocurrency-plans')}}">investment Plans</a>
                            <a class="dropdown-item" href="{{route('retirement')}}">Retirement</a>
                            <a class="dropdown-item" href="{{route('children-account')}}">Children Account</a>
                        </div>
                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <a href="{{route('charity')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po" style="color: black">
                                CHARITY
                            </div>
                        </li>
                    </a>

                 
                   

                    <!-- END COLLAPSE MOBILE MENU -->
                    <li class="dropdown hidden-md-down">
                        <a class="" aria-haspopup="true" aria-expanded="false" href="{{route('charity')}}">CHARITY</a>

                    </li>
                    <!-- STAR COLLAPSE MOBILE MENU -->
                    <a data-toggle="" href="{{route('user.login')}}" aria-expanded="false">
                        <li class="hidden-lg-up">
                            <div class="po">
                                LOGIN
                            </div>
                        </li>
                    </a>
                   
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

