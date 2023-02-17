<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Staretonfinance</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">

    <style>
        a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

        a,
        a:active,
        a:focus {
            color: #333;
            text-decoration: none;
            transition-timing-function: ease-in-out;
            -ms-transition-timing-function: ease-in-out;
            -moz-transition-timing-function: ease-in-out;
            -webkit-transition-timing-function: ease-in-out;
            -o-transition-timing-function: ease-in-out;
            transition-duration: .2s;
            -ms-transition-duration: .2s;
            -moz-transition-duration: .2s;
            -webkit-transition-duration: .2s;
            -o-transition-duration: .2s;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .sec-title {
            position: relative;
            margin-bottom: 70px;
        }

        .sec-title .title {
            position: relative;
            display: block;
            font-size: 16px;
            line-height: 1em;
            color: #ff8a01;
            font-weight: 500;
            background: rgb(247, 0, 104);
            background: -moz-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            background: -webkit-linear-gradient(to left, rgba(247, 0, 104, 1) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            background: linear-gradient(to left, rgba(247, 0, 104) 0%, rgba(68, 16, 102, 1) 25%, rgba(247, 0, 104, 1) 75%, rgba(68, 16, 102, 1) 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#F70068', endColorstr='#441066', GradientType=1);
            color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            text-transform: uppercase;
            letter-spacing: 5px;
            margin-bottom: 15px;
        }

        .sec-title h2 {
            position: relative;
            display: inline-block;
            font-size: 48px;
            line-height: 1.2em;
            color: #1e1f36;
            font-weight: 700;
        }

        .sec-title .text {
            position: relative;
            font-size: 16px;
            line-height: 28px;
            color: #888888;
            margin-top: 30px;
        }

        .sec-title.light h2,
        .sec-title.light .title {
            color: #ffffff;
            -webkit-text-fill-color: inherit;
        }

        .pricing-section {
            position: relative;
            padding: 100px 0 80px;
            overflow: hidden;
        }

        .pricing-section .outer-box {
            max-width: 1100px;
            margin: 0 auto;
        }


        .pricing-section .row {
            margin: 0 -30px;
        }

        .pricing-block {
            position: relative;
            padding: 0 30px;
            margin-bottom: 40px;
        }

        .pricing-block .inner-box {
            position: relative;
            background-color: #ffffff;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            padding: 0 0 30px;
            max-width: 370px;
            margin: 0 auto;
            border-bottom: 20px solid #40cbb4;
        }

        .pricing-block .icon-box {
            position: relative;
            padding: 50px 30px 0;
            background-color: #40cbb4;
            text-align: center;
        }

        .pricing-block .icon-box:before {
            position: absolute;
            left: 0;
            bottom: 0;
            height: 75px;
            width: 100%;
            border-radius: 50% 50% 0 0;
            background-color: #ffffff;
            content: "";
        }


        .pricing-block .icon-box .icon-outer {
            position: relative;
            height: 150px;
            width: 150px;
            background-color: #ffffff;
            border-radius: 50%;
            margin: 0 auto;
            padding: 10px;
        }

        .pricing-block .icon-box i {
            position: relative;
            display: block;
            height: 130px;
            width: 130px;
            line-height: 120px;
            border: 5px solid #40cbb4;
            border-radius: 50%;
            font-size: 50px;
            color: #40cbb4;
            -webkit-transition: all 600ms ease;
            -ms-transition: all 600ms ease;
            -o-transition: all 600ms ease;
            -moz-transition: all 600ms ease;
            transition: all 600ms ease;
        }

        .pricing-block .inner-box:hover .icon-box i {
            transform: rotate(360deg);
        }

        .pricing-block .price-box {
            position: relative;
            text-align: center;
            padding: 10px 20px;
        }

        .pricing-block .title {
            position: relative;
            display: block;
            font-size: 24px;
            line-height: 1.2em;
            color: #222222;
            font-weight: 600;
        }

        .pricing-block .price {
            display: block;
            font-size: 30px;
            color: #222222;
            font-weight: 700;
            color: #40cbb4;
        }


        .pricing-block .features {
            position: relative;
            max-width: 200px;
            margin: 0 auto 20px;
        }

        .pricing-block .features li {
            position: relative;
            display: block;
            font-size: 14px;
            line-height: 30px;
            color: #848484;
            font-weight: 500;
            padding: 5px 0;
            padding-left: 30px;
            border-bottom: 1px dashed #dddddd;
        }

        .pricing-block .features li:before {
            position: absolute;
            left: 0;
            top: 50%;
            font-size: 16px;
            color: #2bd40f;
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
            content: "\f058";
            font-family: "Font Awesome 5 Free";
            margin-top: -8px;
        }

        .pricing-block .features li.false:before {
            color: #e1137b;
            content: "\f057";
        }

        .pricing-block .features li a {
            color: #848484;
        }

        .pricing-block .features li:last-child {
            border-bottom: 0;
        }

        .pricing-block .btn-box {
            position: relative;
            text-align: center;
        }

        .pricing-block .btn-box a {
            position: relative;
            display: inline-block;
            font-size: 14px;
            line-height: 25px;
            color: #ffffff;
            font-weight: 500;
            padding: 8px 30px;
            background-color: #40cbb4;
            border-radius: 10px;
            border-top: 2px solid transparent;
            border-bottom: 2px solid transparent;
            -webkit-transition: all 400ms ease;
            -moz-transition: all 400ms ease;
            -ms-transition: all 400ms ease;
            -o-transition: all 400ms ease;
            transition: all 300ms ease;
        }

        .pricing-block .btn-box a:hover {
            color: #ffffff;
        }

        .pricing-block .inner-box:hover .btn-box a {
            color: #40cbb4;
            background: none;
            border-radius: 0px;
            border-color: #40cbb4;
        }

        .pricing-block:nth-child(2) .icon-box i,
        .pricing-block:nth-child(2) .inner-box {
            border-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .btn-box a,
        .pricing-block:nth-child(2) .icon-box {
            background-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .inner-box:hover .btn-box a {
            color: #1d95d2;
            background: none;
            border-radius: 0px;
            border-color: #1d95d2;
        }

        .pricing-block:nth-child(2) .icon-box i,
        .pricing-block:nth-child(2) .price {
            color: #1d95d2;
        }

        .pricing-block:nth-child(3) .icon-box i,
        .pricing-block:nth-child(3) .inner-box {
            border-color: #ffc20b;
        }

        .pricing-block:nth-child(3) .btn-box a,
        .pricing-block:nth-child(3) .icon-box {
            background-color: #ffc20b;
        }

        .pricing-block:nth-child(3) .icon-box i,
        .pricing-block:nth-child(3) .price {
            color: #ffc20b;
        }

        .pricing-block:nth-child(3) .inner-box:hover .btn-box a {
            color: #ffc20b;
            background: none;
            border-radius: 0px;
            border-color: #ffc20b;
        }
    </style>

</head>

<body class="g-sidenav-show  bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('include.c_sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('include.c_header')

        <section class="pricing-section">
            <div class="container">
                <div class="sec-title text-center">
                    <span class="title">Get plan</span>
                    <h2>Choose a Plan</h2>
                </div>

                <div class="outer-box" style="margin-top: -40px">
                    @if (!$plans->isEmpty())
                        <div class="row">
                            @foreach ($plans as $key => $plan)
                                <div class="pricing-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp"
                                    data-wow-delay="400ms">
                                    <div class="inner-box">
                                        <div class="icon-box">
                                            <div class="icon-outer"><i class="fas fa-gem"></i></div>
                                        </div>
                                        <div class="price-box">
                                            <div class="title">{{ ucwords($plan->name) }} Plan</div>
                                            <h4 class="price">Max -
                                                ${{ $plan->currency == 'USD' ? number_format($plan->max, 0, '.', ',') : $plan->max }}
                                            </h4>
                                            <h4 class="price">Min -
                                                ${{ $plan->currency == 'USD' ? number_format($plan->min, 0, '.', ',') : $plan->min }}
                                            </h4>
                                        </div>
                                        <ul class="features">
                                            <li class="true">Type: {{ $plan->type }}</li>
                                            <li class="true">ROI: {{ $plan->roi }}%</li>
                                            <li class="true">Duration: {{ $plan->duration }}</li>
                                            <li class="true">Commission: {{ ucwords($plan->commission) }}%</li>
                                            <li class="true">Currency: {{ $plan->currency }}</li>
                                            <li class="true">24/7 support</li>
                                        </ul>
                                        <div class="row justify-content-center">
                                            <input style="width: 80%; border:2px solid #e6f2ff;border-radius:12px;"
                                                class="form-control investment_amount" placeholder="Enter Amount "
                                                id="input{{ $key }}" data-btn="btn{{ $key }}"
                                                type="number" name="" placeholder="0.00">

                                            <span class="text-danger error_box d-block mt-1 mb-1"
                                                id="error{{ $key }}"></span>

                                            <button style="width: 200px; background-color: #3fc9b3; margin-top: 10px" data-key="{{ $key }}"
                                                data-error="error{{ $key }}" id="btn{{ $key }}"
                                                data-currency="{{ $plan->currency }}"
                                                data-min="{{ $plan->currency == 'USD' ? number_format(round($plan->min, 2), 0, '.', '') : $plan->min }}"
                                                data-max="{{ $plan->currency == 'USD' ? number_format(round($plan->max, 2), 0, '.', '') : $plan->max }}"
                                                data-plan-url="{{ route('user.plan.view', ['currency']) }}"
                                                data-plan-id="{{ $plan->id }}"
                                                class="btn btn-primary invest_btn" disabled="true" >
                                                Select Plan
                                            </button>


                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </section>


        {{-- </div> --}}
        {{-- </div> --}}
    </main>
    @include('include.settings')

    <div class="modal fade" tabindex="-1" role="dialog" id="buy-coin">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <h5 class="nk-block-title">
                            <!-- <h4 class="time_counter mt-3">10min</h4> -->
                        </h5>
                        <div class="nk-block-text">
                            <div class="title-sub d-none bank text-primary">
                                Make Payment to the Account below , upload your reciept and click the confirm button.
                                <ul class="text-justify p-3 text-dark">
                                    <li>Bank Name : <strong class="text-primary">
                                            <?= ucwords($application->bank_name) ?></strong></li>
                                    <li>Account Number :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_no) ?></strong></li>
                                    <li>Account Name :<strong class="text-primary">
                                            <?= ucwords($application->bank_account_name) ?></strong></li>
                                </ul>
                            </div>
                            <div class="nk-refwg-invite d-none btc">
                                <div class="nk-refwg-head ">
                                    <div class="nk-refwg-title">
                                        <div class="title-sub text-primary">Make Payments of <strong
                                                class="converted_payment"></strong> to the wallet address below ,
                                            upload your transaction screenshot and click confirm button.</div>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="" id="btc_amount">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('btc_amount')">Copy
                                            Amount</button>
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-6 col-sm-7 p-1">
                                        <input readonly style="width:100%;" type="text" class="form-control"
                                            value="<?= $application->btc_address ?>" id="wallet_address">
                                    </div>
                                    <div class="col-md-6 col-sm-5 p-1">
                                        <button style="width:100%;text-align:center !important;"
                                            class="btn btn-primary d-block " onclick="copyText('wallet_address')">Copy
                                            Address</button>
                                    </div>
                                </div>
                            </div><!-- .nk-refwg-invite -->
                        </div>
                    </div>
                    <div class="dropzone"></div>
                    <div class="nk-block">
                        <div class="buysell-field form-action text-center">
                            <div>
                                <a href="#" class="btn btn-primary mt-4 btn-lg confirm_deposit"
                                    data-url="{{ route('user.deposit.confirm.post') }}">Confirm
                                    Payments</a>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>

    {{-- @include('include.c_footer') --}}
    @include('include.c_script')

</body>


</html>
