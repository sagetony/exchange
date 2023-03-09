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
                      <h1 class="title">Deposit</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-6">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Deposit</h2>
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
                              <form action="{{ route('fund') }}" method="POST"> 
                                @csrf
                               
                                <div class="form-group no-mb">
                                    <label class="form-label">Select the cryptocurrency</label>
                                    <span class="desc">minimum value "0.00001 BTC"</span>

                                    <div class="input-group mb-10" name="coin">
                                        <span class="input-group-addon"><i class="fa fa-institution"></i></span>
                                        
                                        <div class="input-group-btn"  style="width:100%">
                                          <select class="form-control input-md m-bot15" name="coin">
                                            <option  value="Bitcoin"><i class="cc ETH-alt mr-5"></i>Bitcoin</option>

                                            <option value="Ethereum" ><i class="cc ETH-alt mr-5"></i>Ethereum</option>
                                            <option value="USDT (TRC20)" ><i class="cc USDT mr-5"></i>USDT (TRC20)</option>
                                            <option value="Litcoin"><a href="#"><i class="cc LTC mr-5"></i>Litcoin</option>
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

                                   

                                    <label class="form-label">Amount</label>
                                    <span class="desc"></span>

                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            $   
                                        </span>
                                        <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                                    </div>

                                   

                                    <button type="submit" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" style="width:100%">Deposit</button>
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