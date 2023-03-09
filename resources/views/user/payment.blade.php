@include('user.head')
@include('user.header')
@include('user.sidebar')




  <!-- START CONTENT -->
  <section id="main-content" class=" ">
      <div class="wrapper main-wrapper row" style=''>
        <div class="col-xl-12">
          <div class="js-conveyor-example">
              <script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script><div id="coinmarketcap-widget-marquee" coins="1,1027,825,1839,52,2010" currency="USD" theme="light" transparent="false" show-symbol-logo="true" width="1000000">
          </div>
        </div>
          <div class='col-xs-12'>
              <div class="page-title">

                  <div class="pull-left">
                      <!-- PAGE HEADING TAG - START -->
                      <h1 class="title">Payment Invoice</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Payment Confirmation                    </h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <marquee behavior="" direction=""> <h2>Kindly Deposit To The Wallet Address Below</h2></marquee>            

                <div class="content-body">    
                    <div class="row">
                      <div class="col-lg-8">
                        {{-- <div class="col-xs-12 mt-20">
                            <h4 class="mb text-center bold">YOU ARE BUYING THE FOLLOWING</h4>
                        </div> --}}
                        <div class="clearfix"></div>
                        <section class="box has-border-left-3">
                            <div class="content-body">    
                                <div class="row">
                                    <div class="col-xs-12 mt-20 mb-30">
                                        <h2 class="mb text-center bold"> Payment Confirmation                                        </h2>
                                        {{-- <small class="text-center f-s-14" style="display:block;font-weight:600">${{$data->amount}}</small> --}}
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="deal-wrapper">
                                        <ul class="dropdown-menu-list list-unstyled no-mb">
                                          <li>
                                            <div class="notice-icon">
                                                <i class="fa fa-institution"></i>
                                                
                                            </div>
                                            <div>
                                                <span class="name">
                                                    <strong>Amount</strong>
                                                    <span class="time">${{$data->amount}}</span>
                                                </span>
                                            </div>
                                        </li>
                                            <li>
                                                <div class="notice-icon">
                                                    <i class="fa fa-institution"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Coin</strong>
                                                        <span class="time">{{ $coindata->coinName}}</span>
                                                    </span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="notice-icon">
                                                    <i class="fa fa-credit-card"></i>
                                                </div>
                                                <div>
                                                    <span class="name">
                                                        <strong>Wallet Address</strong>
                                                        <span class="time">{{ $coindata->coinAddress }}</span>
                                                    </span>
                                                </div>
                                            </li>
                                           
    
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
    
                    </div>
                </div>
            </section>
        </div>

          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->
       
          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')