<div class="mein-menu">
    <nav class="navbar navbar-expand-lg navbar-dark ">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('front/img/logo.png') }}" class="logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('app.home') }}">Home</a>
                    </li>

                    <li class="nav-item" style="z-index: 1000">
                        <div class="dropdown">
                            <div class="caption">Company &nbsp; <span
                                style="font-size: 10px; font-weight: 'bold; margin-top: -10px">V</span></div>
                            <div class="list">
                                {{-- <a href="#home">Home</a>
                                  <a href="#home">Home</a>
                                  <a href="#home">Home</a>
                                  <a href="#home">Home</a> --}}
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('about') }}">About Us</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('faq') }}">FAQs</a></div>
                                <div class="item"><a style="text-decoration: none; color: black" href="{{ route('what-we-offer') }}">What
                                        we offer</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('team') }}">Our team</a></div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item" style="z-index: 1000">
                        <div class="dropdown">
                            <div class="caption">Investments &nbsp; <span
                                    style="font-size: 10px; font-weight: 'bold; margin-top: -10px">V</span>
                                </div>
                            <div class="list">
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('real_estate') }}">Real Estate</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('investments') }}">Investment Plans</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('retirement') }}">Retirement</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('children-account') }}">Children Account</a></div>
                                <div class="item"><a style="text-decoration: none; color: black"
                                        href="{{ route('nfp') }}">NFP</a></div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('charity') }}">Charity</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('user.login') }}"> Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link button-1" href="{{ route('user.register') }}">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
