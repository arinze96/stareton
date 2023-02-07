<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="netabout">
                        <a href="{{ route('app.home') }}" class="logo">
                            <img src="{{ asset('assets/images/background/MT_Trans_2.png') }}" alt="businesspro">
                        </a>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto soluta laboriosam, perspiciatis, aspernatur officiis esse.</p> --}}
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <p class="in-p">Monetary Trades Schluhmattstrasse 55, Zermatt 3920
                                        Switzerland</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa-brands fa-instagram"></i>
                                    <a href="https://instagram.com/Gloryinvesmentlimited?igshid=YmMyMTA2M2Y=
                                    ">
                                        <p class="in-p">Follow Us on Instagram</p>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa-brands fa-twitter"></i>
                                    <a href="https://twitter.com/Gloryinvesmentlimited?t=nKgnFcTJoQXcZZNJJIpKbw&s=09
                                    ">
                                        <p class="in-p">Follow Us on Twitter</p>
                                    </a>

                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <p class="in-p ti">support@Gloryinvesmentlimited.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="widget quick-link clearfix">
                        <h3 class="widget-title">Quick Links</h3>
                        <div class="quick-links">
                            <ul class="one-half mr-5">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                {{-- <li><a href="{{route('company')}}">company</a></li> --}}
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('what-we-offer') }}">What We Offer</a></li>
                                <li><a href="{{ route('risk-management') }}">Risk Management</a></li>
                                <li class="no-pb"><a href="{{ route('faq') }}">FAQ</a></li>
                            </ul>
                            <ul class="one-half">
                                <li><a href="{{ route('real_estate') }}">Real Estate</a></li>
                                {{-- <li><a href="{{route('market-analysis')}}">Market Analysis</a></li> --}}
                                <li><a href="{{ route('cryptocurrency-plans') }}">Cryptocurrency Plans</a></li>
                                <li><a href="{{ route('children-account') }}">Children Account</a></li>
                                <li><a href="{{ route('cryptocurrency-plans') }}">Investment</a></li>
                                <li class="no-pb"><a href="{{ route('charity') }}">Charity</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-md-6">
                    <div class="widget">
                        <h3>Twitter Feeds</h3>
                        <div class="twitter-widget contuct">
                            <div class="twitter-area">
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@Gloryinvesmentlimited</a> all share them with me baby said inspet.</h5>
                                        <h4>about 3 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@Gloryinvesmentlimited</a> all share them with me baby said inspet.</h5>
                                        <h4>about 4 days ago</h4>
                                    </div>
                                </div>
                                <div class="single-item">
                                    <div class="icon-holder">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </div>
                                    <div class="text">
                                        <h5><a href="#">@Gloryinvesmentlimited</a> all share them with me baby said inspet.</h5>
                                        <h4>about 5 days ago</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>Newsletters</h3>
                        <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive news in
                            your inbox.</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="Enter Your Email">
                            <input type="submit" value="Subscribe">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>Gloryinvesmentlimited. ©2022 All rights reserved. </p>
            <ul class="netsocials">
                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
