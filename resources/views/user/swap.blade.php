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
                      <h1 class="title">Exchange</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
      
        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Bitcoin wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc BTC color-primary"></i>
                                        </div>
                                        <strong class="mb-20">Bitcoin</strong>
                                        <div class="form-group Ceramax no-mb">
                                            {{-- <label class="form-label mt-10">wallet address</label>
                                            <span class="desc"></span>

                                            <div class="input-group mb-10">
                                                <span class="input-group-addon has-gradient-to-right-bottom">
                                                    <i class="cc BTC-alt icon-white"></i>   
                                                </span>
                                                <p class="form-control-static with-border">OxsD12F32xvW3deG5...</p>
                                                <a href="#" class="input-group-addon" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                                            </div> --}}

                                          
                                            <div class="mt-10 balance">
                                                <strong class="form-label bold">Balance : </strong>
                                                <span class="desc color-primary f-s-14"> {{number_format(($databtc) /  $respBTC->USD, 3) }} BTC</span>
                                            </div>
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> {{ $databtc }} USD</span>
                                            </div>

                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div>

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">USDT  wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc USDT color-primary"></i>
                                        </div>
                                        <strong class="mb-20">USDT</strong>
                                        <div class="form-group Ceramax no-mb">
                                            
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> {{ $datausdt }} USD</span>
                                            </div>

                                            
                                            
                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div>

        {{-- <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Ripple  wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc XRP color-primary"></i>
                                        </div>
                                        <strong class="mb-20">Ripple</strong>
                                        <div class="form-group Ceramax no-mb">
                                            

                                            <div class="mt-10 balance">
                                                <strong class="form-label bold">Balance : </strong>
                                                <span class="desc color-primary f-s-14"> 2,523.8237 XRP</span>
                                            </div>
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> 275,237 USD</span>
                                            </div>

                                           
                                            
                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div> --}}
        

        {{-- <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Dashcoin wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc DASH color-primary"></i>
                                        </div>
                                        <strong class="mb-20">Dashcoin</strong>
                                        <div class="form-group Ceramax no-mb">
                                            <label class="form-label mt-10">wallet address</label>
                                            <span class="desc"></span>

                                            <div class="input-group mb-10">
                                                <span class="input-group-addon has-gradient-to-right-bottom">
                                                    <i class="cc DASH-alt icon-white"></i>   
                                                </span>
                                                <p class="form-control-static with-border">OxsD12F32xvW3deG5...</p>
                                                <a href="#" class="input-group-addon" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                                            </div>

                                            <span class="desc">1 BTC</span>
                                            <label class="form-label"> = 12.734 USD</label><br>
                                            
                                            <span class="desc">Total selling amount</span>
                                            <label class="form-label">54,634 $</label><br>
                                            
                                            <span class="desc">Total buying buy</span>
                                            <label class="form-label">534,263 $</label><br>

                                            <div class="mt-10 balance">
                                                <strong class="form-label bold">Balance : </strong>
                                                <span class="desc color-primary f-s-14"> 1.5238237 DASH</span>
                                            </div>
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> 15,238,237 USD</span>
                                            </div>

                                            <div class="col-sm-6 no-pl">
                                                <a href="buy-and-sell.html" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Withdraw</a>
                                            </div>
                                            <div class="col-sm-6 no-pr">
                                                <a href="buy-and-sell.html" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Deposit</a>
                                            </div>
                                            
                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div>

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Doge wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc DOGE color-primary"></i>
                                        </div>
                                        <strong class="mb-20">Dogecoin</strong>
                                        <div class="form-group Ceramax no-mb">
                                            <label class="form-label mt-10">wallet address</label>
                                            <span class="desc"></span>

                                            <div class="input-group mb-10">
                                                <span class="input-group-addon has-gradient-to-right-bottom">
                                                    <i class="cc DOGE-alt icon-white"></i>   
                                                </span>
                                                <p class="form-control-static with-border">OxsD12F32xvW3deG5...</p>
                                                <a href="#" class="input-group-addon" data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                                            </div>

                                            <span class="desc">1 Doge</span>
                                            <label class="form-label"> = 0.00273 USD</label><br>
                                            
                                            <span class="desc">Total selling amount</span>
                                            <label class="form-label">265,634 $</label><br>
                                            
                                            <span class="desc">Total buying buy</span>
                                            <label class="form-label">534,263 $</label><br>

                                            <div class="mt-10 balance">
                                                <strong class="form-label bold">Balance : </strong>
                                                <span class="desc color-primary f-s-14"> 145,238,237 BOGE</span>
                                            </div>
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> 2,275,237 USD</span>
                                            </div>

                                            <div class="col-sm-6 no-pl">
                                                <a href="buy-and-sell.html" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Withdraw</a>
                                            </div>
                                            <div class="col-sm-6 no-pr">
                                                <a href="buy-and-sell.html" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Deposit</a>
                                            </div>
                                            
                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div> --}}

        <div class="col-lg-4">
            <section class="box has-border-left-3">
                    <header class="panel_header">
                        <h2 class="title pull-left">Ethereum wallet</h2>
                        <div class="actions panel_actions pull-right">
                            <a class="box_toggle fa fa-chevron-down"></a>
                            <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                            <a class="box_close fa fa-times"></a>
                        </div>
                    </header>
                    <div class="content-body">    
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="text-center no-mt no-mb">
                                    <div class="transfer-wraper">
                                        <div class="crypto-icon">
                                            <i class="cc ETC-alt color-primary"></i>
                                        </div>
                                        <strong class="mb-20">Ethereum</strong>
                                        <div class="form-group Ceramax no-mb">
                                            
                                            <div class="mt-10 balance">
                                                <strong class="form-label bold">Balance : </strong>
                                                <span class="desc color-primary f-s-14"> {{number_format(($dataeth) /  $respETH->USD, 3) }} ETC</span>
                                            </div>
                                            <div class="balance bg-white">
                                                <strong class="form-label bold">Balance in USD: </strong>
                                                <span class="desc color-primary f-s-14"> {{ $dataeth }} USD</span>
                                            </div>

                                           
                                            
                                        </div>
                                           
                                        
                                    </div>
                                   
                                </div>
                            </div>
                           
                        </div>
                    </div>
            </section>
        </div>
          <div class="col-lg-10">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Exchange</h2>
                    <div class="actions panel_actions pull-right">
                        <a class="box_toggle fa fa-chevron-down"></a>
                        <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                        <a class="box_close fa fa-times"></a>
                    </div>
                </header>
                <div class="content-body">    
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="transfer-wraper">
                              <form action="{{ route('swap') }}" method="POST"> 
                                @csrf
                               
                                <div class="form-group no-mb">
                                    <label class="form-label">Select the cryptocurrency</label>

                                    <div class="input-group mb-10" name="coin">
                                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                        
                                        <div class="input-group-btn"  style="width:100%">
                                          <select class="form-control input-md m-bot15" name="coin">
                                            <option  value="Bitcoin"><i class="cc ETH-alt mr-5"></i>Bitcoin</option>

                                            <option value="Ethereum" ><i class="cc ETH-alt mr-5"></i>Ethereum</option>
                                            <option value="USDT (TRC20)" ><i class="cc USDT mr-5"></i>USDT (TRC20)</option>
                                        </select>
                                            {{-- <button type="button" class="btn btn-red dropdown-toggle" style="width:100%;text-align:left" data-toggle="dropdown" aria-expanded="true">
                                                <i class="cc BTC mr-5"></i>Bitcoin <span class="caret" style="position: absolute;right: 10px;top: 14px;"></span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-red no-spacing" style="width:100%">
                                                <li><a href="#"><i class="cc ETH-alt mr-5"></i>Ethereum</a></li>
                                                <li><a href="#"><i class="cc USDT mr-5"></i>USDT</a></li>
                                                <li><a href="#"><i class="cc NEO mr-5"></i>Neo</a></li>
                                                <li><a href="#"><i class="cc LTC mr-5"></i>Litcoin</a></li>
                                                <li><a href="#"><i class="cc XRP mr-5"></i>Ripple</a></li>
                                            </ul> --}}
                                        </div>

                                    </div>
                                    <label class="form-label">Select the cryptocurrency</label>

                                    <div class="input-group mb-10" name="coin">
                                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                        
                                        <div class="input-group-btn"  style="width:100%">
                                          <select class="form-control input-md m-bot15" name="swapcoin">
                                            <option  value="Bitcoin"><i class="cc ETH-alt mr-5"></i>Bitcoin</option>

                                            <option value="Ethereum" ><i class="cc ETH-alt mr-5"></i>Ethereum</option>
                                            <option value="USDT (TRC20)" ><i class="cc USDT mr-5"></i>USDT (TRC20)</option>
                                        </select>
                                           
                                        </div>

                                    </div>

                                   

                                    <label class="form-label">Amount</label>
                                    <span class="desc"></span>

                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            $   
                                        </span>
                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                                    </div>

                                   

                                    <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Exchange</button>
                                </div>
                              </form>
                            </div>
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