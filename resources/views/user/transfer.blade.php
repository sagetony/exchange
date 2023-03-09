@include('user.head')
@include('user.sidebar')
@include('user.header')
<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item active">Transfer Funds</li>
                            </ol>
                        </div>
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div>
            <!-- end page title end breadcrumb -->
                 
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="row align-items-center">
                                <div class="col">                      
                                    <h4 class="card-title">Transfer Funds</h4>                      
                                </div><!--end col-->
                            </div>  <!--end row-->                                  
                        </div><!--end card-header-->      
                        <div class="card-body">                                        
                            <form method="POST" action="{{ route('transfer') }}">
                                @csrf
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Transfer From:</span>
                                    <select class="form-select w-25" aria-label="Default select example" name="paymentType">
                                        <option value="Interest">Interest</option>
                                        <option value="Bonus">Bonus</option>
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Username</span>
                                    <input type="text" class="form-control" name="username">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">Amount</span>
                                    <input type="text" class="form-control" name="amount" aria-label="Amount (to the nearest dollar)">
                                    <span class="input-group-text">$ Dollar</span>
                                </div> 
                                <div class=" mt-3 ms-auto">
                                    <button type="submit" class="btn btn-success btn-sm">Transfer Funds</button>
                                </div>
                            </form> <!--end form-->  
                            
                        </div><!--end card-body--> 
                    </div><!--end card--> 
                </div><!--end col--> 

                        
            </div> <!-- end row -->

        </div><!-- container -->
@include('user.footer')