@include('admin.head')

@include('admin.header')
@include('admin.sidebar')
<!-- main-sidebar -->
<!-- main-content -->
<div class="main-content app-content">

    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
        <div class="container-fluid">
                    <div class="main-header-left ">
                            <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                                <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                                <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
                            </div>
                            
                    </div>
        <div class="main-header-center ">
        </div>
        
        <div class="main-header-right">
            <div class="nav nav-item  navbar-nav-right ml-auto">
                
                <div class="nav-item full-screen fullscreen-button">
                    <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                </div>
                
                
                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                </button>
               
                <div class="dropdown main-header-message right-toggle">
                    <a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="ti-menu tx-20 bg-transparent"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- /main-header -->
    
    <!-- mobile-header -->
    <div class="responsive main-header collapse" id="navbarSupportedContent-4">
    <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
        <div class="navbar-collapse">
            <div class="d-flex order-lg-2 ml-auto">
               
                <div class="d-md-flex">
                    <div class="nav-item full-screen fullscreen-button">
                        <a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
                    </div>
                </div>
                
                <div class="dropdown main-header-message right-toggle">
                    <a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="ti-menu tx-20 bg-transparent"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- mobile-header -->
    
    <!-- container -->
    <div class="container-fluid">
    
        
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <h3 class="content-title mb-2"></h3>
            <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Edit User&nbsp;</p>
                
            </div>
        </div>
        
    </div>
    <!-- /breadcrumb -->
    
    
    
    <!-- row -->
    <div class="row row-sm">
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card crypto crypt-primary overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="coin-logo bg-primary-transparent">
                            <i class="fas fa-wallet text-primary"></i>
                        </div>
                        <div class="media-body">
                            <h5>Earnings</h5>
                        </div>
                        <div class="card-body-top">
                            <div>

                                    
                                <span><h5> $ {{ number_format($walletamount + $bonusamount + $profit - $withdrawmain + $interest, 2) }} </h5> </span>
                                   
                                    
                                <span><h5>  </h5> </span>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
                <div class="flot-wrapper">
                        <div class="flot-chart ht-150  mt-0" id="flotChart5"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card crypto crypt-danger overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="coin-logo bg-danger-transparent">
                            <i class="fa fa-users text-danger"></i>
                        </div>
                        <div class="media-body">
                            <h5>Total Deposit</h5>
                        </div>
                        <div class="card-body-top">
                            <div>

                                <span><h5> $ {{ number_format($walletamount + $profit - $withdrawcapital, 2) }} </h5> </span>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="flot-wrapper">
                        <div class="flot-chart ht-150  mt-0" id="flotChart5"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card crypto crypt-warning overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="coin-logo bg-warning-transparent">
                            <i class="fas fa-money-bill-alt text-warning"></i>
                        </div>
                        <div class="media-body">
                            <h5>Total Withdraw</h5>
                        </div>
                        <div class="card-body-top">
                            <div>
                                <span><h5> ${{ number_format($withdraw, 2) }}</h5> </span>
                                    <span><h5>  </h5> </span>    
    
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flot-wrapper">
                        <div class="flot-chart ht-150  mt-0" id="flotChart5"></div>
                    </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card crypto crypt-warning overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="coin-logo bg-warning-transparent">
                            <i class="fas fa-money-bill-alt text-warning"></i>
                        </div>
                        <div class="media-body">
                            <h5>Total Interest</h5>
                        </div>
                        <div class="card-body-top">
                            <div>
                                <span><h5> ${{ number_format($interest, 2) }}</h5> </span>
                                    <span><h5>  </h5> </span>    
    
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="flot-wrapper">
                        <div class="flot-chart ht-150  mt-0" id="flotChart5"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-12">
            <div class="card crypto crypt-danger overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="coin-logo bg-danger-transparent">
                            <i class="fa fa-users text-danger"></i>
                        </div>
                        <div class="media-body">
                            <h5>Bonus</h5>
                        </div>
                        <div class="card-body-top">
                            <div>

                                <span><h5> ${{ number_format($bonusamount - $withdrawbonus, 2)}} </h5> </span>
                            </div>
                            
                        </div>
                        
                    </div>
                    <div class="flot-wrapper">
                        <div class="flot-chart ht-150  mt-0" id="flotChart5"></div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
   
    
    <div class="col-lg-6 col-md-12">
        <div class="card">
            <div class="card-body">
                
                
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xl-12 mx-auto d-block">
                        <div class="card card-body pd-10 pd-md-20 border shadow-none">
                            <h5 class="card-title mg-b-20">User Personal Information</h5>
                            <form action="{{ route('edituser') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">USER ID</label> <input class="form-control"name="id" type="text" id="id" value="{{ $userdata->userId }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">First Name</label> <input class="form-control"name="firstname" type="text" id="firstname" value="{{ $userdata->firstName }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Last Name</label> <input class="form-control"name="lastname" type="text" id="lastname" value="{{ $userdata->lastName }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">User Name</label> <input class="form-control"name="username" type="text" id="username" value="{{ $userdata->username }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Email Address</label> <input class="form-control"name="email" type="text" id="email"  value="{{ $userdata->email }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Country</label> <input class="form-control"name="country" type="text" id="country"  value="{{ $userdata->country }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Phone Number</label> <input class="form-control"name="phone" type="text" id="phone"  value="{{ $userdata->phoneNumber }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Referral ID</label> <input class="form-control"name="referralid" type="text" id="referralid"  value="{{ $userdata->referralId }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">My Referral</label> <input class="form-control"name="referral" type="text" id="referral"  value="{{ $userdata->referral }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Email Verification</label> <input class="form-control"name="emailVer" type="text" id="emailVer"  value="{{ $userdata->emailVerified }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Initial Plan</label> <input class="form-control"name="plan" type="text" id="plan"  value="{{ $userdata->plan }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Password</label> <input class="form-control"name="password" type="text" id="password"  value="{{ $userdata->passwordh }}">
                            </div>
                            <div class="form-group">
                                <label class="main-content-label tx-11 tx-medium tx-gray-600">Date of Registration</label> <input class="form-control"name="date" type="text" id="date"  value="{{ $userdata->created_at }}">
                            </div>
                            <button class="btn btn-main-primary btn-block" name="sub" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    
    
    <!-- row -->
    
    <!-- /row -->
    
    </div>
    <!-- Container closed -->
    <div class="row" style="width:100%";>
        <div class="col-md-12">
            <div class="card overflow-hidden">
                <div class="card-body">
                    <div class="">
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title mg-b-10">Deposit History</h4>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>

                            
                    <div class="table-responsive market-values">
                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                            @foreach ($datadeposits as  $datadeposit)
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                    <th>Amount</th>
                                    <th>Package</th>
                                    <th>Interest</th>
                                    <th>Compounded Profit</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                    
                                </tr>
                            </thead>
                
                                
                
                            <tbody>
                                <tr class="border-bottom">
                                    <td>{{ $datadeposit->transactionId}}</td>
                                    <td>{{ $datadeposit->amount }}</td>
                                    <td>{{ $datadeposit->plan }}</td>
                                    <td>{{ $datadeposit->interest }}</td>
                                    <td>{{ $datadeposit->profit }}</td>
                                    <td class=""><span class="shadow-none badge outline-badge-primary"></span>{{ $datadeposit->status }}</td>
                                    <td>{{ $datadeposit->created_at }}</td>

                                    <td>
                                        <div class="btn-group">
                                            @if($datadeposit->status =='CONFIRM')
                                                   <button class='btn btn-success' data-toggle='modal' title='Approve Transaction' data-target='#myModalLOCK{{$datadeposit->transactionId}}'><i class='fa fa-unlock'></i></button>
                                            @else
                                                <button class='btn btn-danger' data-toggle='modal' title='Pending Transaction' data-target='#myModalUNLOCK{{ $datadeposit->transactionId }}'><i class='fa fa-lock'></i></button>
                                            @endif
                                            <a class="btn btn-info" data-toggle="" title="Edit Transaction" href="{{ Route('editfunds', ['id' => $datadeposit->transactionId]) }}"><i class="fa fa-edit"></i></a> 
                                            {{-- <button class="btn btn-danger" data-toggle="modal" title="Delete User" data-target='#myModalDELETED{{ $datadeposit->transactionId }}'><i class="fa fa-trash"></i></button> --}}
                                            {{-- <button class="btn btn-danger" data-toggle="modal" title="Delete User" data-target='#myModalDELETE{{ $datauser->userID }}'><i class="fa fa-trash"></i></button> --}}
                                        </div>
                                    </td>
                                </tr>

                                    <div id="myModalLOCK{{$datadeposit->transactionId }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                            
                                                    <h4 class="modal-title">Pending Transaction?</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to make this transaction pending?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="submit" class="btn btn-danger" href="{{Route('adminuser', ['unconfirmid' => $datadeposit->transactionId])}} ">Pending Transaction</a>
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div id="myModalDELETED{{$datadeposit->transactionId}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                            
                                                    <h4 class="modal-title">Delete Transaction?</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Are you sure you want to delete transaction?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <a type="button" class="btn btn-danger" href="{{ Route('adminuser', ['deleteid' => $datadeposit->transactionId]) }}">Delete Transaction</a>
                                                    <button type="button" class="btn btn-default"  data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                <!-- Modal -->
                                    <div id="myModalUNLOCK{{ $datadeposit->transactionId }}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                        
                                                <h4 class="modal-title">Confirm Transation?</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Are you sure you want to confirm transaction?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a type="button" class="btn btn-danger" href="{{ Route('adminuser', ['confirmid' =>  $datadeposit->transactionId]) }}">Confirm Transaction</a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                     
                                                
                                                <!-- Modal -->

                                    <div id="myModalDELETE" class="modal fade" role="dialog">
                                        <div class="modal-dialog">

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                            
                                                    <h4 class="modal-title">Delete Transaction?</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>


                                                            <div class="modal-body">
                                                                <p>Are you sure you want to delete transaction?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <a type="button" class="btn btn-danger" href="">Delete Transaction</a>
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                            </tbody>
                            @endforeach

                        </table>

                    </div>
                    <h2>Transaction History</h2>
                    <div class="table-responsive market-values">

                        <table class="table table-bordered table-hover table-striped text-nowrap mb-0 tx-13" >
                            @foreach ($datatrans as  $datatran)
                            <thead>
                                <tr>
                                    <th>Transaction ID</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Type</th>
                                                <th>Status</th>
                                    
                                </tr>
                            </thead>
                
                                
                
                            <tbody>
                                <tr class="border-bottom">
                                    <td>{{ $datatran->transactionId }}</td>
                                                <td> ${{ $datatran->amount }}</td>
                                                <td>{{ $datatran->created_at }}</td>
                                                <td>{{ $datatran->paymentMethod }}</td>
                                                @if($datatran->status == 'CONFIRM')
                                                <td><span class="badge badge-soft-success">{{ $datatran->status }}</span></td>
                                                @else
                                                <td><span class="badge badge-soft-danger">{{ $datatran->status }}</span></td>
                                                @endif

                                </tr>

                                  
                            </tbody>
                            @endforeach

                        </table>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- main-content closed -->
    
    <!-- Right-sidebar-->
    <div class="sidebar sidebar-right sidebar-animate">
    <div class="p-3">
        <a href="#" class="text-right float-right" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
    </div>
    <div class="tab-menu-heading border-0 card-header">
        <div class="card-title mb-0">Profile</div>
        <div class="card-options ml-auto">
            <a href="{{ route('adminprofile') }}" class="sidebar-remove"><i class="fe fe-x"></i></a>
        </div>
    </div>
    
    <div class="panel-body tabs-menu-body side-tab-body p-0 border-0 ">
        <div class="tab-content">
            <div class="tab-pane active" id="tab">
                <div class="card-body p-0">
                    
                    {{-- <a class="dropdown-item mt-4 border-top" href="editprofile.php">
                        <i class="dropdown-icon fe fe-edit mr-2"></i> Edit Profile
                    </a>
                   
                    <a class="dropdown-item  border-top" href="support.php">
                        <i class="dropdown-icon fe fe-help-circle mr-2"></i> Need Help?
                    </a>
                    <a class="dropdown-item  border-top" href="logout.php">
                        <i class="dropdown-icon fas fa-sign-out-alt mr-2"></i> Log Out
                    </a> --}}
                  
                </div>
            </div>
            
        </div>
    @include('admin.footer');