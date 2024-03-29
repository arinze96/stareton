<!DOCTYPE HTML>
<html lang="en-US">


<head>
    <title>Stareton Finance</title>
    @include('include.#home_css')
    <script type="text/javascript">
        var duplicate_google_translate_counter = 0; //this stops google adding button multiple times

        function googleTranslateElementInit() {
            if (duplicate_google_translate_counter == 0) {
                new google.translate.TranslateElement({
                    pageLanguage: 'en'
                }, 'google_translate_element');
            }
            duplicate_google_translate_counter++;
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
</head>

<body class="homepage">
    <div class="loader"><i class="fa-solid fa-spinner"></i></div>
    @include('include.#home_header')

    <div class="slider_area d-flex align-items-center position-relative overflow-hidden">
        <div class="slider_img">
            <img src="{{ asset('new2/assets/images/all.jpg') }}" alt="slider img"
                style="object-fit: cover; width: 100%; height: 100%">
        </div>

        <!-- single slide -->
        <div class="single_slide position-absolute">
            <div id="google_translate_element"
                style="position:fixed;margin-top:10px; left:20px; bottom: 20px; z-index: 3000px"></div></div>

            <div class="slider_content text_center">
                <div class="slider_text">
                    <div class="slider_text_inner">
                        <h1>Bitcoin & Cryptocurrency</h1>
                        <h1>Investment Platform</h1>
                        <h2 class="cd-headline clip is-full-width">Take the anxiety out of investing <br> by letting us
                            do the work <br> for you. We provide
                            <span class="cd-words-wrapper">
                                <b class="is-visible"> Crypto Trading</b>
                                <b>Real Estate </b>
                                <b> Retirement</b>
                                <b>Escrow</b>
                                <b>Blockchain</b>
                                <b>NFP</b>
                                <b>Children Account</b>
                            </span>
                        </h2>
                    </div>
                    <div class="single_slider_button">
                        <a class="btn btn-warning" href="{{ route('user.register') }}">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="animation-box">
            <div class="about-mercury-animation mobile-hidden visible">
                <div class="coin-animation">
                    <i class="coin coin-1"></i>
                    <i class="coin coin-2"></i>
                    <i class="coin coin-3"></i>
                    <i class="coin coin-4"></i>
                    <i class="coin coin-5"></i>
                    <i class="coin coin-6"></i>
                    <i class="coin coin-7"></i>
                    <i class="coin coin-8"></i>
                    <i class="coin coin-9"></i>
                    <i class="coin coin-10"></i>
                    <i class="coin coin-11"></i>
                    <i class="coin coin-12"></i>
                    <i class="coin coin-13"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="crypto_portfolio mt-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center">
                    <div class="portfolio_img">
                        <img src="{{ asset('new2/assets/images/portfolio-section.png') }}" alt="portfolio"
                            class="image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="crypto_portfolio_description">
                        <div class="title-main">
                            <h2 class="product-title">How does it work?
                            </h2>
                            <p class="title-desc">
                                It's easier than you think.Follow 3 simple easy steps
                            </p>
                        </div>

                        <div class="portfolio_desc_inner">
                            <div class="iconleft"><i class="icon-account"></i></div>
                            <div class="portfolio_outer">
                                <h4 class="crypto_portfolio_title">Select a suitable plan</h4>
                                <p class="portfolio_paragraf_info">Select a suitable investment plan that you are
                                    comfortable with and sit tight for our team of expert to transform it into profits
                                </p>
                            </div>
                        </div>
                        <div class="portfolio_desc_inner">
                            <div class="iconleft"><i class="icon-identity"></i></div>
                            <div class="portfolio_outer">
                                <h4 class="crypto_portfolio_title">Verify your identity</h4>
                                <p class="portfolio_paragraf_info">Complete the identity verification process to secure
                                    your account and transactions.</p>
                            </div>
                        </div>
                        <div class="portfolio_desc_inner">
                            <div class="iconleft"><i class="icon-trading"></i></div>
                            <div class="portfolio_outer">
                                <h4 class="crypto_portfolio_title">Invest funds and
                                    withdraw profit</h4>
                                <p class="portfolio_paragraf_info">You're good to go! Buy/sell financial assets, set up
                                    recurring
                                    buys for your investments, and discover what staretonfinance has to offer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="cards_landscape_wrap-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-12">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">

                                <div class="text-container">
                                    <h6 style="color: black">The Online Financial investment Platform
                                    </h6>
                                    <p>
                                        Stareton finance is a instant Financial investment Platform. Gooland is
                                        a platform that offer access to a variety of different services such as
                                        cryptocurrency, real estate investment, Retirement account, Children accounts
                                        .Our mission is to offer our users easy and secure transactions and make the
                                        investment process effortless for everyone who wants to invest in the above
                                        mentioned services.
                                    </p>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://www.centurylink.com/content/dam/home/help/internet/fiber/fiber-cables-1200x675.jpg"
                                        alt="" />
                                </div>
                                <div class="text-container">
                                    <h6 style="color: black">Extra Fast
                                        Transactions</h6>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://businessday.ng/wp-content/uploads/2019/05/cyber-security.jpg"
                                        alt="" />
                                </div>
                                <div class="text-container">
                                    <h6 style="color: black">
                                        Secure
                                        Transactions
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://cdn.geckoandfly.com/wp-content/uploads/2016/12/bitcoin-wallet.jpg"
                                        alt="" />
                                </div>

                                <div class="text-container">
                                    <h6 style="color: black">
                                        No limits on
                                        Exchange

                                    </h6>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="">
                        <div class="card-flyer">
                            <div class="text-box">
                                <div class="image-box">
                                    <img src="https://www.forbes.com/advisor/wp-content/uploads/2021/11/best-crypto-exchange.jpeg"
                                        alt="" />
                                </div>
                                <div class="text-container">
                                    <h6 style="color: black">We have the best
                                        exchange rate
                                    </h6>

                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="crypto_solution mt-50">
        <div class="container">
            <div class="title-main text-center">
                <h2 class="product-title">We provide Top Crypto Money Solutions for Corporate and Personal persons.
                    <h6 class="">We provide Top Crypto Money Solutions for Corporate and Personal persons.
                    </h6>
            </div>
            <div class="crypto_solution_section">
                <div class="provide-carousel owl-carousel">
                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-Coin-Offering"></i></div>
                        <h3 class="crypto_solution_desc">Business Consulting</h3>
                        <h6 style="color: white; font-size: 10px">
                            At stareton finance we are on daily standby for Business Consulting, and strategic
                            development endeaours. We are alway available 24/7
                        </h6>
                    </div>
                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-bitcoin"></i></div>
                        <h3 class="crypto_solution_desc">Financial Data Analysis
                        </h3>
                        <h6 style="color: white; font-size: 10px">
                            At stareton finance we are on daily standby for Business Consulting, and strategic
                            development endeaours. We are alway available 24/7
                        </h6>
                    </div>
                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-payment"></i></div>
                        <h3 class="crypto_solution_desc">Children Account Investment
                        </h3>
                        <h6 style="color: white; font-size: 10px">
                            Our team of Experts are successful investment fund managers on the best financial investment
                            for your kids future

                        </h6>
                    </div>

                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-research"></i></div>
                        <h3 class="crypto_solution_desc">Cryptocurrency Investment</h3>
                        <h6 style="color: white; font-size: 10px">
                            We help you invest funds in the best crypto asset for a maximum return, we have maintained a
                            leading position in the field of crypto investment
                        </h6>
                    </div>
                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-crypto-bag"></i></div>
                        <h3 class="crypto_solution_desc">Global Charity Donations
                        </h3>
                        <h6 style="color: white; font-size: 10px">
                            We raise funds for humanitarian purposes which is mainly focused on help the less
                            priviledged in the third world countries

                        </h6>
                    </div>
                    <div class="crypto_solution_block equalHeight">
                        <div class="icons"><i class="icon-tracing"></i></div>
                        <h3 class="crypto_solution_desc">Retirement Fund Investment
                        </h3>
                        <h6 style="color: white; font-size: 10px">
                            Our team of financial experts advices help advise you on how to manage your portfolio and
                            invest in a high return market for a better future

                        </h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="home-customer mt-50">
        <div class="container">
            <div class="title-main text-center">
                <h2 class="product-title">What Are Our Customers Saying ?</h2>
                <p class="title-desc">Every customer is valuable to us. Here are the reviews of some of our customers
                    who choose us.</p>
            </div>

            <div class="customer-carousel owl-carousel">
                <div class="customer_section text-center">
                    <div class="customer_description">
                        <p>This Investment platform where you can get great results. I can get crypto profits very
                            quickly. Thanks.</p>
                    </div>
                    <div class="customer_image">
                        <img src="{{ asset('new2/assets/images/testimonial/user-1.jpg') }}" alt=""
                            loading="lazy" class="rounded-circle">
                        <h3 class="user_name">Romy</h3>
                        <h3 class="user_name">Columbus Ohio</h3>
                    </div>
                </div>
                <div class="customer_section text-center">
                    <div class="customer_description">
                        <p>I will always recommend this platform for everybody especially those that wants financial
                            freedom </p>
                    </div>
                    <div class="customer_image">
                        <img src="{{ asset('new2/assets/images/testimonial/user-2.jpg') }}" alt=""
                            loading="lazy" class="rounded-circle">
                        <h3 class="user_name">Michal Cheril</h3>
                        <h3 class="user_name">monaco</h3>
                    </div>
                </div>
                <div class="customer_section text-center">
                    <div class="customer_description">
                        <p>Made a ton of money over the last 3 months i started investing in this platform</p>
                    </div>
                    <div class="customer_image">
                        <img src="{{ asset('new2/assets/images/testimonial/user-3.jpg') }}" alt=""
                            loading="lazy" class="rounded-circle">
                        <h3 class="user_name">Robert belch</h3>
                        <h3 class="user_name">Long beach california</h3>
                    </div>
                </div>
                <div class="customer_section text-center">
                    <div class="customer_description">
                        <p>i was skeptical initially, but after series of withdrawals....i can recommend this platform
                            to anybody</p>
                    </div>
                    <div class="customer_image">
                        <img src="{{ asset('new2/assets/images/testimonial/user-4.jpg') }}" alt=""
                            loading="lazy" class="rounded-circle">
                        <h3 class="user_name">Casidy belma</h3>
                        <h3 class="user_name">New Zealand</h3>
                    </div>
                </div>
                <div class="customer_section text-center">
                    <div class="customer_description">
                        <p>I have so much better life after investing in this platform</p>
                    </div>
                    <div class="customer_image">
                        <img src="{{ asset('new2/assets/images/testimonial/user-5.jpg') }}" alt=""
                            loading="lazy" class="rounded-circle">
                        <h3 class="user_name">Mario Fernadez</h3>
                        <h3 class="user_name">Bercelona spain</h3>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section class="py-5 " style="background-color: #e5ad4b">
        <div class="container">
            <div class="title-main text-center">
                <h2 class="product-title">INVESTMENT PLANS</h2>
                <p class="title-desc">SELECT A SUITABLE INVESTMENT PLANS</p>
            </div>
            <div class="row">
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton cradle</h5>
                            <h6 class="h1 text-white text-center">$500<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>1 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>No Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton mining</h5>
                            <h6 class="h1 text-white text-center">$5,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>1 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>7.25% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible to Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">CBD Stareton</h5>
                            <h6 class="h1 text-white text-center">$5,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>1 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible to Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Forex</h5>
                            <h6 class="h1 text-white text-center">$15,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>1 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>5% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible to Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Trading</h5>
                            <h6 class="h1 text-white text-center">$20,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>2 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>9% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Not Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Oil and Gas</h5>
                            <h6 class="h1 text-white text-center">$30,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>2 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>9.8% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible for Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Real Estate</h5>
                            <h6 class="h1 text-white text-center">$50,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>2 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>12% Weekly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible for Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Gold</h5>
                            <h6 class="h1 text-white text-center">$100,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>2 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>15% Monthly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible to Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3" style="margin-bottom: 30px">
                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">
                        <div class="card-header">
                            <h5 class="card-title text-white-50 text-uppercase text-center">Stareton Exclusive</h5>
                            <h6 class="h1 text-white text-center">$500,000<span class="h6 text-white-50"></h6>
                        </div>
                        <div class="card-body bg-light rounded-bottom">
                            <ul class="list-unstyled mb-4">
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>2 Year Plan</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>20% Monthly</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>10% Mgnt Fee</li>
                                <li class="mb-3"><span class="mr-3"><i
                                            class="fas fa-check text-success"></i></span>Eligible to Compounding</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>Currency: USD</li>
                                <li class="text-muted mb-3"><span class="mr-3"><i
                                            class="fas fa-times"></i></span>24/7 support</li>
                            </ul>
                            <a href="{{ route('user.login') }}"
                                class="btn btn-block btn-dark text-uppercase rounded-lg py-3">Buy
                                now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    {{-- <div class="home-team mt-50">
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
    </div> --}}
    <!-- .Team -->
    <div class="main_content">
        <div class="about_content">
            <div class="about_info" style="margin-top: 100px">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="about_desc">
                                <h2 style="margin-bottom: 20px">EXCLUSIVE PARTNERSHIP</h2>
                                <p>
                                    Corporate investors an individual investors are welcomed to partner with us.
                                    Partner with Stareton Finance to benefit from our wealth of financial expertise,
                                    world-class infrastructure, and outstanding support team. Our strategic approach to
                                    investing
                                    and wealth managment, coupled with our proven results, has contributed to our
                                    excellent reputation
                                    for reliabilty.
                                </p>
                                <p>
                                    At Stareton Finance, we undertand that the basic needs of people will always be in
                                    demand and we have
                                    ventured to welcome investors to partner with us exclusively by supporting all our
                                    growth effort as an organization

                                </p>
                                <h2 style="margin-bottom: 20px; margin-top: 40px">MANAGEMENT FEE</h2>
                                <p>
                                    The 10% Stareton Finance management charges is taken out from your earnings only on
                                    withdrawals
                                </p>
                                <div class="col-lg-12" style="margin-bottom: 30px">
                                    <div class="card bg-dark mb-5 mb-lg-0 rounded-lg shadow">

                                        <div class="card-body bg-light rounded-bottom">
                                            <ul class="list-unstyled mb-4">
                                                <li class="mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>10 generations
                                                </li>
                                                <li class="mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>10% on 1st
                                                    generation(Direct Referals)</li>
                                                <li class="mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>Lifetime
                                                    agreement</li>
                                                <li class="mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>Eligible to
                                                    Compounding plan</li>
                                                <li class="text-muted mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>Private fund
                                                    manager</li>
                                                <li class="text-muted mb-3"><span class="mr-3"><i
                                                            class="fas fa-check text-success"></i></span>24/7 support
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="need_help mt-50">
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

    @include('include.#home_footer')

    @include('include.#home_js')

</body>


</html>
