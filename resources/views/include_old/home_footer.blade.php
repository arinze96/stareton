<div class="footer" style="background-image: url({{ asset('front/img/footer-bg.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.2s">
                <div class="top-footer">
                    <div class="logo"><img src="{{ asset('front/img/logo.png') }}" alt=""></div>
                    <a href="#" class="button-1">Get In touch </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="footer-box">
                    <h4 class="lasthead">Services</h4>
                    <ul class="footer-link">
                        <li><a href="{{ route('app.home') }}">Home</a></li>
                        <li><a href="{{ route('real_estate') }}">Real Estate</a></li>
                        <li><a href="{{ route('investments') }}">Investment Plan</a></li>
                        <li><a href="{{ route('retirement') }}">Retirement</a></li>
                        <li><a href="{{ route('charity') }}">Charity</a></li>
                        <li><a href="{{ route('children-account') }}">Children Account</a></li>
                        <li><a href="{{ route('nfp') }}">NFP</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="footer-box">
                    <h4 class="lasthead">Support</h4>
                    <ul class="footer-link">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('faq') }}">FAQ</a></li>
                        <li><a href="{{ route('user.contact') }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <div class="footer-box">
                    <h4 class="lasthead">Policy</h4>
                    <ul class="footer-link">
                        {{-- <li><a href="#">Terms of use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Refund Policy</a></li> --}}
                        <li><a href="{{ route('user.login') }}">Login</a></li>
                        <li><a href="{{ route('user.register') }}">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.6s">
                <div class="footer-box">
                    <h4 class="lasthead">Newsletter</h4>
                    <form action="#">
                        <div class="form-group">
                            <input type="email" placeholder="Enter email address">

                            <button type="submit" class="button-1">Join Now</button>
                        </div>
                    </form>
                    <div class="social-style">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        <a href="#"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                <div class="footer-bottom">
                    <p class="text">Copyright &copy; <a href="#">GLORYINVESTMENTLIMITED</a> | <a href="#">2023</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>