<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <title>{{ config("app.name") }}</title>
    @include('include.c_css')
</head>

<body class="nk-body npc-crypto has-sidebar has-sidebar-fat ui-clean ">
    <div class="nk-app-root">
        <div class="nk-main ">
            @include('include.c_sidebar')
            <div class="nk-wrap ">
                @include('include.c_header')
                <div class="nk-content ">
                  <div class="container-fluid">
                   <div class="nk-content-inner">
                    <div class="nk-content-body">
                     <div class="components-preview wide-md mx-auto">
                      <div class="nk-block-head nk-block-head-lg wide-sm">
                       <div class="nk-block-head-content">
                        <div class="nk-block-head-sub"><a class="back-to" href="javascript:void(0)" onclick="history.go(-1)"><em class="icon ni ni-arrow-left"></em><span>Back</span></a></div>
                        <h3 class="nk-block-title fw-normal text-center">APPLY FOR YOUR PERSONAL LOAN</h3>
                       </div>
                      </div>
                      <div class="nk-block nk-block-lg">
                       <div class="card card-bordered card-preview">
                        <div class="card-inner">
                         <div class="preview-block">
                          <span class="preview-title-lg overline-title"></span>
                          <div class="">
                           <form action="{{ route("user.loan") }}" method="POST">
                            @csrf
                            <div class="row">
      
                              <div class="col-sm-12  form-row">
                                @if (!empty($success))
                                <span class="info_box text-success">{{ $success }}</span>
                                @endif
                              </div>
                            
                              <div class="col-sm-12  form-row">
                                @if (!empty($error))
                                <span class="info_box text-danger">{{ $error }}</span>
                                @endif
                              </div>
            
                            <div class="col-sm-6 col-md-12 mb-2">
                             <div class="form-group">
                              <label class="form-label" for="firstname">Firstname</label>
                              <div class="form-control-wrap">
                               <input required="" type="text"  class="form-control" name="firstname"  
                               value="{{ old("firstname") }}"
                                placeholder="Enter firstname">
                              </div>
                              @error('firstname')
                              <span class="text-danger" id="error_name">{{ $message }}</span>
                              @enderror
                             </div>
                            </div>

                                        
                            <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="lastname">Lastname</label>
                               <div class="form-control-wrap">
                                <input required="" type="text"  class="form-control" name="lastname"  
                                value="{{ old("lastname") }}"
                                 placeholder="Enter lastname">
                               </div>
                               @error('lastname')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>
             
        

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="email">Email</label>
                               <div class="form-control-wrap">
                                <input required="" type="email"  class="form-control" name="email"  
                                value="{{ old("email") }}"
                                 placeholder="Enter email">
                               </div>
                               @error('email')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="username">Address</label>
                                 <div class="form-control-wrap">
                                  <input required="" type="text"  class="form-control" name="address"  
                                  value="{{ old("address") }}"
                                   placeholder="Enter address">
                                 </div>
                                 @error('address')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                              <div class="form-group">
                               <label class="form-label" for="phone">Next of Kin</label>
                               <div class="form-control-wrap">
                                <input required="" type="phone"  class="form-control" name="next_of_kin"  
                                value="{{ old("next_of_kin") }}"
                                 placeholder="Enter The Name Of Your Next of Kin">
                               </div>
                               @error('next_of_kin')
                               <span class="text-danger" id="error_name">{{ $message }}</span>
                               @enderror
                              </div>
                             </div>

                             <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="phone">Payment Method</label>
                                 <div class="form-control-wrap">
                                   <select name="currency" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Payment Method</option>
                                    <option value="BTC">BTC</option>
                                    <option value="USD">USD</option>
                                    <option value="ETH">ETH</option>
                                </select>
                                 </div>
                                 @error('currency')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="phone">Amount</label>
                                 <div class="form-control-wrap">
                                   <select name="amount" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Amount</option>
                                    <option value="$1,000">$1,000</option>
                                    <option value="$3,000">$3,000</option>
                                    <option value="$5,000">$5,000</option>
                                    <option value="$7,000">$7,000</option>
                                    <option value="$10,000">$10,000</option>
                                    <option value="$15,000">$15,000</option>
                                    <option value="$25,000">$25,000</option>
                                    <option value="$35,000">$35,000</option>
                                    <option value="$50,000">$50,000</option>
                                    <option value="$100,000">$100,000</option>
                                    
                                </select>
                                 </div>
                                 @error('amount')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>

                               <div class="col-sm-6 col-md-12 mb-2">
                                <div class="form-group">
                                 <label class="form-label" for="phone">Duration of Loan</label>
                                 <div class="form-control-wrap">
                                   <select name="duration" id="strategySelect" class="form-control">
                                    <option value="" disabled selected hidden>Duration of Loan</option>
                                    <option value="3 months">3 months</option>
                                    <option value="6 months">6 months</option>
                                    <option value="1 year">1 year</option>
                                    <option value="2 years">2 years</option>
                                </select>
                                 </div>
                                 @error('duration')
                                 <span class="text-danger" id="error_name">{{ $message }}</span>
                                 @enderror
                                </div>
                               </div>
             
  
                            <div class="col-sm-4 mt-3">
                             <div class="form-group">
                              <div class="form-control-wrap">
                               <button type="submit"  style="text-align:center;" class="d-block form-control btn btn-primary ">
                                Submit Request</button>
                              </div>
                             </div>
                            </div>
            
                           </form>
            
                          </div>
                         </div>
                        </div>
                       </div><!-- .card-preview -->
                      </div><!-- .nk-block -->
                     </div><!-- .nk-block -->
                    </div>
                   </div>
                  </div>
                 </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('include.c_footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    {{-- footer --}}
    @include('include.c_script')
    <!-- END PAGE CONTAINER-->
</body>

</html>