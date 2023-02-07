<!DOCTYPE html>
<html lang="en">

<head>
    <title>Corona Admin</title>
    @include('include.a_css')
</head>

<body>
    <div class="container-scroller">
        <div class="row p-0 m-0 proBanner" id="proBanner">
            <div class="col-md-12 p-0 m-0">
                <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
                    <div class="ps-lg-1">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates,
                                and more with this template!</p>
                            <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo"
                                target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <a href="https://www.bootstrapdash.com/product/corona-free/"><i
                                class="mdi mdi-home me-3 text-white"></i></a>
                        <button id="bannerClose" class="btn border-0 p-0">
                            <i class="mdi mdi-close text-white me-0"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
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
                                            <h4 class="mb-1 mb-sm-0">Overview of all Charity Donations</h4>
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


                    <div class="row ">
                        @if (!$retirement->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">All Retirement funds</h4>
                                        <h6 class="card-title">This is the list of all Retirement funds requests from customers.
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Fullname</th>
                                                        <th>Currency</th>
                                                        <th>Amount</th>
                                                        <th>Duration</th>
                                                        <th>Status</th>
                                                        <th>Action</th>
                                                        <th>Approve</th>
                                                        <th>Decline</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($retirement as $key => $retire)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td>{{ ucwords($retire->firstname) }} {{ ucwords($retire->lastname) }}</td>
                                                            <td>{{ ucwords($retire->currency) }}</td>
                                                            <td> ${{ number_format($retire->amount, 0, '.', ',') }}
                                                            </td>
                                                            <td>{{ ucwords($retire->duration) }}</td>
                                                            <td>{{ $retire->status == 0 ? 'unapproved' : 'Approved' }}</td>
                                                            
                                                            <td style="justify-content: space-between">
                                                                <a href="{{ route("admin.retirement.view",["edit",$retire->id]) }}"><i class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                    style="margin-right: 5px"></i></a>
                                                                <a class="delete_data" href="{{ route("admin.retirement.view",["delete",$retire->id]) }}" data-type="Request" ><i class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                    style="margin-right: 5px"></i></a>
                                                            </td>
                                                            <td>
                                                                <a data-action="approve" data-type="Request"
                                                                    class="decline_approve"
                                                                    href="{{ route("admin.retirement.view",["approve",$retire->id]) }}">
                                                                    <div class="badge badge-outline-success">Approve
                                                                    </div>
                                                                </a>
                                                            </td>
                                                            <td>
                                                                <a data-action="decline" data-type="Request"
                                                                    class="decline_approve"
                                                                    href="{{ route("admin.retirement.view",["decline",$retire->id]) }}">
                                                                    <div class="badge badge-outline-danger">Decline
                                                                    </div>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <h4 class="text-center">No Active Retirement at the moment</h4>
                        @endif
                    </div>



                </div>
                @include('include.a_footer')
            </div>
        </div>
    </div>
    @include('include.a_scripts')
</body>

</html>
