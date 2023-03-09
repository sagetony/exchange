@include('admin.head')

@include('admin.header')
@include('admin.sidebar')
<!-- main-content -->
<div class="main-content app-content">

    <!-- main-header -->
    <div class="main-header sticky side-header nav nav-item">
    <div class="container-fluid">
    <div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
                                <a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
                                <a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
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
            <div class="d-flex">
                <i class="fas fa-donate text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Deposit Details&nbsp;</p>
                
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
    
    
    <marquee behavior="" direction=""><h3>NOTE: Do not fill any information on the Deposit ID field</h3></marquee>

    <!-- row -->
    <div class="row row-sm">
    <div class="col-xl-6 col-lg-6 col-md-12">
            <div class="card crypto crypt-primary overflow-hidden">
                <div class="card-body iconfont text-left">
                    <div class="media">
                        <div class="Deposit-logo bg-primary-transparent">
                            <i class="fas fa-donate text-warning"></i>
                        </div>
                        <div class="media-body">
                            <h3>Deposit Details</h3>
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
                                                <h5 class="card-title mg-b-20">Deposit Details</h5>
                                                <form action="{{ route('editfunds') }}" method="post">
                                                @csrf
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Deposit Id</label> <input class="form-control" value= "{{ $data->transactionId}}" name="id" type="text" id="id">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Username</label> <input class="form-control" value= "{{ $data->username}}" name="name" type="text" id="name">
                                                </div>
                                                 <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Amount</label> <input class="form-control" value= "{{ $data->amount}}" name="amount" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Interest</label> <input class="form-control" value= "{{ $data->interest}}" name="interest" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Compound Profit</label> <input class="form-control" value= "{{ $data->profit}}" name="profit" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Plan</label> <input class="form-control" value= "{{ $data->plan}}" name="plan" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Plan Amount (Rate %)</label> <input class="form-control" value= "{{ $data->planAmount }}" name="planAmount" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Day Counter</label> <input class="form-control" value= "{{ $data->dayCounter}}" name="dayCounter" type="text" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label class="main-content-label tx-11 tx-medium tx-gray-600">Date</label> <input class="form-control" value= "{{ $data->created_at}}" name="date" type="text" id="name">
                                                </div>
                                                                                             
                                                <button class="btn btn-main-primary btn-block" name="sub" type="submit">Edit Deposit Details</button>
                                                </form>
                                            </div>
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
            <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
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
    </div>
    </div>
@include('admin.footer')