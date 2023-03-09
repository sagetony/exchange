@include('user.head')
@include('user.header')
@include('user.sidebar')



   <!-- START CONTENT -->
   <div id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Security</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>



        <div class="clearfix"></div>

        <div class="col-lg-12">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Security System</h2>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="tabs-wrapper">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#home-1" data-toggle="tab">
                                            <img src="../data/icons/sec-level1.png" class="tab-img-icon" alt="icon">
                                            <div class="tab-head">
                                                <h4 class="bold mb-5">Level 1</h4>
                                                <h4 class="no-mt"><small>prevent losing access to you fund</small></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#level-2" data-toggle="tab">
                                            <img src="../data/icons/sec-level2.png" class="tab-img-icon" alt="icon">
                                            <div class="tab-head">
                                                <h4 class="bold mb-5">Level 2</h4>
                                                <h4 class="no-mt"><small>prevent unauthorized access to wallet</small></h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#level-3" data-toggle="tab">
                                            <img src="../data/icons/sec-level3.png" class="tab-img-icon" alt="icon">
                                            <div class="tab-head">
                                                <h4 class="bold mb-5">Level 3</h4>
                                                <h4 class="no-mt"><small>advanced security options of wallet </small></h4>
                                            </div>
                                        </a>
                                    </li>
                                    
                                </ul>

                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="home-1">

                                        <ul class="list-unstyled">
                                            <li class="">
                                                <div class="security-option-wrapper">
                                                    <img src="../data/icons/email-verification.png" class="tab-img-icon" alt="icon">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">Email Verification</h4>
                                                        {{-- <h4 class="no-mt"><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt nihil, maxime cumque dolorum facere et error, molestias laborum at animi culpa accusamus eius corrupti totam temporibus quasi in aliquam.</small></h4> --}}
                                                        @if (auth()->user()->emailVerified == "YES")
                                                            <h5 class="bold no-mb"><i class="fa fa-check-circle-o complete f-s-14"></i> Verified</h5>
                                                        @else
                                                            <h5 class="bold no-mb"><i class="fa fa-check-circle-o pending f-s-14"></i> Unverified</h5>
                                                        @endif
                                                    </div>
                                                </div>
                                            </li>
                                            
                                            
                                        </ul>

                                    </div>
                                    <div class="tab-pane fade" id="level-2">

                                        <ul class="list-unstyled">

                                            <li class="">
                                                <div class="security-option-wrapper">
                                                    <img src="../data/icons/backup.png" class="tab-img-icon" alt="icon">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">Backup Recovery Phase</h4>
                                                        <h4 class="no-mt"><small>Giant, Juice, Overflow, Oatmeal, Irritate, Chance, Chicago, Door, Star, Spade, Soup, Shoe.</small></h4>

                                                        <a href="#" class="btn btn-primary btn-corner right15"><i class="fa fa-cloud-download complete color-white"></i>Backup Now</a>
                                                    </div>
                                                </div>
                                            </li>
                                           
                                        </ul>

                                    </div>
                                    <div class="tab-pane fade" id="level-3">

                                        <ul class="list-unstyled">
                                           
                                            <li class="">
                                                <div class="security-option-wrapper">
                                                    <img src="../data/icons/pass-hint.png" class="tab-img-icon" alt="icon">
                                                    <div class="tab-head">
                                                        <h4 class="bold mb-5">Create Password Hint</h4>
                                                        <form action="{{ route('security') }}" method="post">
                                                            @csrf
                                                            <div class="form-group mb-10">
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control bg-white" style="color:aliceblue" id="field-15" name="hint" placeholder="password hint" style="width:100%" required>
                                                                </div>
                                                            </div>
                                                            <button type="submit" class="btn btn-primary btn-corner right15"><i class="fa fa-cloud-download complete color-white"></i>Save Now</button>
                                                        </form>
                                                         {{-- <a href="buy-and-sell.html" class="btn btn-primary btn-corner right15" type=""><i class="fa fa-cloud-download complete color-white"></i>Save Now</a> --}}
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>

                                    </div>

                                   
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

        <div class="clearfix"></div>


        <!-- MAIN CONTENT AREA ENDS -->
    </section>
</div>
<!-- END CONTENT -->
                 
@include('user.footer')