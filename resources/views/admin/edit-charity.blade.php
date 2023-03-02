<!DOCTYPE html>
<html lang="en">

<head>
    <title>Corona Admin</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">
         
        <!-- partial:partials/_sidebar.html -->
        @include('include.a_sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            @include('include.a_topbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card corona-gradient-card">
                                <div class="card-body py-0 px-0 px-sm-3">
                                    <div class="row align-items-center">
                                        <div class="col-4 col-sm-3 col-xl-2">
                                            <img src="assets/admin/images/dashboard/Group126@2x.png"
                                                class="gradient-corona-img img-fluid" alt="">
                                        </div>
                                        <div class="col-5 col-sm-7 col-xl-8 p-0">
                                            <h4 class="mb-1 mb-sm-0">Overview of all Plans</h4>
                                        </div>
                                        <div class="col-3 col-sm-2 col-xl-2 ps-0 text-center">
                                            <span>
                                                <a href="{{ route('app.home') }}" target="_blank"
                                                    class="btn btn-outline-light btn-rounded get-started-btn">Go to
                                                    Home</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-8 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Charity</h4>
                                <form class="" method="POST" data-post-type="edit-plan"
                                    action="{{ route('admin.charity.view', ['edit', $charities->id]) }}">

                                    @csrf
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
                                            <label class="form-label" for="min">Deposit
                                                Amount ({{ $charities->currency }})</label>
                                            <div class="form-control-wrap">
                                                <input required="" type="text" name="amount" class="form-control"
                                                    id="amount" placeholder="Enter amount"
                                                    value="{{ !empty(old('amount')) ? old('amount') : $charities->amount }}">
                                            </div>
                                            @error('amount')
                                                <span class="text-danger" id="error_amount">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-sm-6 col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="form-label" for="status">Donation
                                                Status</label>
                                            <div class="form-control-wrap">
                                                <select name="status" class="form-control">
                                                    <option value="" disabled selected>
                                                        Select</option>
                                                    @foreach (config('app.deposit_status') as $key => $status)
                                                        <option @if (old('status') == $key || $charities->status == $key) selected @endif
                                                            value="{{ $key }}">
                                                            {{ $status }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            @error('status')
                                                <span class="text-danger" id="error_status">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-sm-4 mt-3">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <button type="submit" name="edit-plan" style="text-align:center;"
                                                    class="d-block form-control btn btn-primary ">Edit
                                                    Charity Donation Record</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>


