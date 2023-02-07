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
                                            <h4 class="mb-1 mb-sm-0">Overview of all customers wallet</h4>
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
                        @if (!$users->isEmpty())
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Our Customers</h4>
                                        <h6 class="card-title">This is the list of all users of our app.
                                        </h6>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">#</th>
                                                        <th scope="col">Fullname</th>
                                                        <th scope="col">Username</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Country</th>
                                                        <th scope="col">Phone</th>
                                                        <th scope="col">Pin</th>

                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Switch status</th>
                                                        <th scope="col">Switch Admin</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($users as $key => $user)
                                                        <tr>
                                                            <td>{{ $key + 1 }}</td>
                                                            <td scope="row">{{ ucwords($user->firstname) }}
                                                                {{ ucwords($user->lastname) }} </td>
                                                            <td>{{ ucwords($user->username) }}</td>
                                                            <td>{{ ucwords($user->email) }}</td>
                                                            <td>{{ ucwords($user->country) }}</td>
                                                            <td>{{ ucwords($user->phone) }}</td>
                                                            <td>{{ ucwords($user->pin) }}</td>
                                                            <td>{{ ucwords(config('app.user_status')[$user->status]) }}
                                                            </td>
                                                            <td>
                                                                <a href="{{ route("admin.users.view",["edit-customer-profile",$user->id]) }}">
                                                                    <i
                                                                    class="icon-sm mdi mdi-pen text-warning ms-auto"
                                                                    style="margin-right: 5px"></i>
                                                                </a>

                                                                <a class="delete_data text-danger" href="{{ route("admin.users.view",["delete",$user->id]) }}" data-type="profile" >
                                                                    <i
                                                                    class="icon-sm mdi mdi-popcorn text-warning ms-auto"
                                                                    style="margin-right: 5px"></i>
                                                                </a>
                                                                <a href="{{ route("admin.users.view",["view-profile",$user->id]) }}">
                                                                    <i
                                                                    class="icon-sm mdi mdi-eye text-warning ms-auto"
                                                                    style="margin-right: 5px"></i>
                                                                </a>
                                                            </td>
                                                            

                                                            <td>
                                                                @if ($user->status == 1)
                                                                <a data-action="suspend" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["suspend",$user->id]) }}">
                                                                    <div class="badge badge-outline-danger">Suspend
                                                                    </div>
                                                                </a>
                                                                @else
                                                                <a data-action="activate" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["activate",$user->id]) }}">
                                                                    <div class="badge badge-outline-success">Activate
                                                                    </div>
                                                                </a>
                                                                @endif
                                                            </td>

                                                            <td>
                                                                @if ($user->role == 1)
                                                                <a data-action=" unmake admin" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["unmake-admin",$user->id]) }}">
                                                                    <div class="badge badge-outline-danger">Unmaked Admin
                                                                    </div>
                                                                </a>
                                                                @else
                                                                <a data-action="make admin" data-type="profile"  class="decline_approve" href="{{ route("admin.users.view",["make-admin",$user->id]) }}">
                                                                    <div class="badge badge-outline-success">Make Admin
                                                                    </div>
                                                                </a>
                                                                @endif
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
                            <h4 class="text-center">No Customer Wallet at the moment</h4>
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
