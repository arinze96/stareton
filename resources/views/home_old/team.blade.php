<!DOCTYPE HTML>
<html lang="en-US">


<head>
     <title>Stareton Finance</title>
    @include('include.#home_css')
</head>

<body class="homepage">
    <div class="loader"><i class="fa-solid fa-spinner"></i></div>
    <!-- HEADER DEFAULT MANU AREA -->
    @include('include.#home_header')
    <!-- .HEADER MENU AREA -->




    <!-- Team -->
    <div class="home-team mt-50" style="margin-top: 100px">
        <div class="container">
            <div class="title-main text-center">
                <h2 class="product-title">Team Members</h2>
                <p class="title-desc">OUR LEADERSHIP</p>
            </div>
            <div class="team-carousel owl-carousel">
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('new2/assets/images/testimonial/team-1.jpg') }}" alt="team">
                    </div>
                    <div class="team-info">
                        <h3>Liam Berry</h3>
                        <span>CEO</span>
                        <div class="team-social-icon">
                            
                        </div>
                    </div>
                </div>
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('new2/assets/images/testimonial/team-2.jpg') }}" alt="team">
                    </div>
                    <div class="team-info">
                        <h3>Georage Lara</h3>
                        <span>Co-founder</span>
                        <div class="team-social-icon">
                            
                        </div>
                    </div>
                </div>
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('new2/assets/images/testimonial/team-3.jpg') }}" alt="team">
                    </div>
                    <div class="team-info">
                        <h3>William Joseph</h3>
                        <span>Managing Director</span>
                        <div class="team-social-icon">
                            
                        </div>
                    </div>
                </div>
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('new2/assets/images/testimonial/team-4.jpg') }}" alt="team">
                    </div>
                    <div class="team-info">
                        <h3>Nova Wallace</h3>
                        <span>Exchange Specialist</span>
                        <div class="team-social-icon">
                            
                        </div>
                    </div>
                </div>
                <div class="single-team-box">
                    <div class="team-image">
                        <img src="{{ asset('new2/assets/images/testimonial/team-5.jpg') }}" alt="team">
                    </div>
                    <div class="team-info">
                        <h3>Nims Willian</h3>
                        <span>Manager</span>
                        <div class="team-social-icon">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Team -->

    <div class="need_help mt-50" >
        <div class="container">
            <div class="title-main text-center">
                <h2 class="product-title">Need help?</h2>
            </div>
            <div class="help_section">
                <div class="row">
                    <div class="col-md-4">
                        <div class="help_block">
                            <div class="icons"><i class="icon-support"></i></div>
                            <div class="help_info">
                                <div class="help_info_title">24/7 Chat Support</div>
                                <div class="help_info_desc">Get 24/7 chat support with our friendly customer service
                                    agents at your service.</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="help_block">
                            <div class="icons"><i class="icon-faqs"></i></div>
                            <div class="help_info">
                                <div class="help_info_title">FAQs</div>
                                <div class="help_info_desc">View FAQs for detailed instructions on specific features.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="help_block">
                            <div class="icons"><i class="icon-blog"></i></div>
                            <div class="help_info">
                                <div class="help_info_title">Blog</div>
                                <div class="help_info_desc">Stay up to date with the latest stories and commentary.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .Need Help -->

    <!-- FOOTER AREA -->
    @include('include.#home_footer')
    <!-- .FOOTER AREA -->

    @include('include.#home_js')

</body>


</html>
