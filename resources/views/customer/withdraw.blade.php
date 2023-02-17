<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <title>Staretonfinance</title>
    @include('include.c_css')
    <link id="skin-default" rel="stylesheet" href="{{ asset('assets/css/dropzone.min.css') }}">

    <style>
        #success_message {
            display: none;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#contact_form').bootstrapValidator({
                    // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
                    feedbackIcons: {
                        valid: 'glyphicon glyphicon-ok',
                        invalid: 'glyphicon glyphicon-remove',
                        validating: 'glyphicon glyphicon-refresh'
                    },
                    fields: {
                        first_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your first name'
                                }
                            }
                        },
                        last_name: {
                            validators: {
                                stringLength: {
                                    min: 2,
                                },
                                notEmpty: {
                                    message: 'Please supply your last name'
                                }
                            }
                        },
                        email: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your email address'
                                },
                                emailAddress: {
                                    message: 'Please supply a valid email address'
                                }
                            }
                        },
                        phone: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your phone number'
                                },
                                phone: {
                                    country: 'US',
                                    message: 'Please supply a vaild phone number with area code'
                                }
                            }
                        },
                        address: {
                            validators: {
                                stringLength: {
                                    min: 8,
                                },
                                notEmpty: {
                                    message: 'Please supply your street address'
                                }
                            }
                        },
                        city: {
                            validators: {
                                stringLength: {
                                    min: 4,
                                },
                                notEmpty: {
                                    message: 'Please supply your city'
                                }
                            }
                        },
                        state: {
                            validators: {
                                notEmpty: {
                                    message: 'Please select your state'
                                }
                            }
                        },
                        zip: {
                            validators: {
                                notEmpty: {
                                    message: 'Please supply your zip code'
                                },
                                zipCode: {
                                    country: 'US',
                                    message: 'Please supply a vaild zip code'
                                }
                            }
                        },
                        comment: {
                            validators: {
                                stringLength: {
                                    min: 10,
                                    max: 200,
                                    message: 'Please enter at least 10 characters and no more than 200'
                                },
                                notEmpty: {
                                    message: 'Please supply a description of your project'
                                }
                            }
                        }
                    }
                })
                .on('success.form.bv', function(e) {
                    $('#success_message').slideDown({
                        opacity: "show"
                    }, "slow") // Do something ...
                    $('#contact_form').data('bootstrapValidator').resetForm();

                    // Prevent form submission
                    e.preventDefault();

                    // Get the form instance
                    var $form = $(e.target);

                    // Get the BootstrapValidator instance
                    var bv = $form.data('bootstrapValidator');

                    // Use Ajax to submit form data
                    $.post($form.attr('action'), $form.serialize(), function(result) {
                        console.log(result);
                    }, 'json');
                });
        });
    </script>

</head>

<body class="g-sidenav-show  bg-gray-100">


    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NKDMSK6" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>

    @include('include.c_sidebar')

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

        @include('include.c_header')

        <main class="main-content  mt-0">
            <section class="min-vh-100 mb-8">
                {{-- <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg"
                style="background-image: url('../assets/img/curved-images/curved14.jpg');">
                <span class="mask bg-gradient-dark opacity-6"></span>
                <div class="container">
                  <div class="row justify-content-center">
                    <div class="col-lg-5 text-center mx-auto">
                      <h1 class="text-white mb-2">Welcome!</h1>
                      <p class="text-lead text-white" style="margin-bottom: -40px">Use these awesome forms to login or create new account in your project for
                        free.</p>
                    </div>
                  </div>
                </div>
              </div> --}}
                <div class="container" style="margin-top: 100px">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 col-md-8 mx-auto">
                            <div class="card z-index-0">
                                <div class="card-header text-center pt-4">
                                    <h3>Widthdrawals</h3>
                                    <h6 style="color: gray; font-size: 12px">Withdrawal of funds from your
                                        {{ ucwords(strtolower(config('app.name'))) }} account balance is available using
                                        5
                                        payment systems - BTC, ETH, LTC, USDT, Perfect Money. Select the account then
                                        select the payment system to which you want to withdraw funds, enter the
                                        withdrawal amount and click the "Withdraw".</h6>
                                    <h6 style="color: gray; font-size: 12px">
                                        IMPORTANT!!! Withdrawals are available only to those wallets that are saved in
                                        the "Payment Data" section.
                                    </h6>
                                </div>



                                <div class="card-body">
                                    <form role="form text-left">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Choose Account</label>
                                            <select name="currency" id="currency" class=" charge_account form-control"
                                                id="exampleFormControlSelect1">
                                                <option data-balance="{{ $account->dolla_balance }}" value="USD">
                                                    </i>USD</option>
                                                <option data-balance="{{ $account->bitcoin_balance }}" value="BTC">
                                                    </i>BTC</option>
                                                <option data-balance="{{ $account->ethereum_balance }}" value="ETH">
                                                    </i>ETH</option>
                                                <option data-balance="{{ $account->referral_balance }}" value="BONUS">
                                                    </i>BONUS</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Payment Method</label>
                                            <select class="payment_account form-control" id="exampleFormControlSelect1">
                                                @if (!empty($account->perfectmoney_address))
                                                    <option value="Perfect-Money">Perfect Money</option>
                                                @endif
                                                @if (!empty($account->bitcoin_address))
                                                    <option value="BTC">BTC</option>
                                                @endif
                                                @if (!empty($account->usdt_address))
                                                    <option value="USDT">USDT</option>
                                                @endif
                                                @if (!empty($account->ethereum_address))
                                                    <option value="ETH">ETH</option>
                                                @endif
                                                @if (!empty($account->litecoin_address))
                                                    <option value="LTC">LTC</option>
                                                @endif
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1">Amount to Widthdraw</label>
                                            <span class=" text-center text-danger" id="error_box"></span>
                                            <input type="text" class="form-control withdrawal_amount"
                                                placeholder="Withdrawal Amount" aria-label="Password"
                                                aria-describedby="password-addon">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlSelect1">Transaction Pin</label>
                                            <span class=" text-center text-danger" id="error_box"></span>
                                            <input type="text" class="form-control transaction_pin"
                                                placeholder="Financial Pin" aria-describedby="password-addon">
                                        </div>

                                        <div class="text-center">
                                            <button data-url="{{ route('user.withdraw.view') }}"
                                                class="btn bg-gradient-primary mt-3 w-100 process_withdraw">- withdraw
                                                funds</button>
                                            {{-- <button type="button" class="btn bg-gradient-dark w-100 my-4 mb-2">+ Add Funds</button> --}}
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </main>


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

    @include('include.c_script')
    <script>
        var $imageArray = [];
        var $site = "{{ route('app.home') }}";
        let $proof_upload = "{{ route('user.deposit.proof.post', ['add']) }}";
        let $proof_delete = "{{ route('user.deposit.proof.post', ['delete']) }}";
    </script>
    <script src="{{ asset('assets/js/dropzone.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom_dropzone.js') }}"></script>
</body>


</html>
