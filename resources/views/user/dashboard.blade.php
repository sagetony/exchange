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
                      <h1 class="title">Dashboard</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-12">
              <section class="box nobox marginBottom0">
                  <div class="content-body">
                      <div class="row">
                          <div class="col-lg-4 col-sm-6 col-xs-12">
                              <div class="r4_counter db_box has-gradient-to-right-bottom">
                                  <div class="icon-after cc USDT-alt"></div>
                                  <i class='pull-left cc USDT-alt icon-md icon-white mt-10'></i>
                                  <div class="stats">
                                      <h3 class="color-white mb-5">{{ (round(0  + $walletamount +  $bonusamount + $interest - $withdraw - $datawiti, 2)) }}</h3>
                                      <span>Wallet balance</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after cc USDT-alt"></div>
                                <i class='pull-left cc USDT-alt icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ round($walletamount + 0, 2) }}</h3>
                                    <span>Total Deposit</span>
                                </div>
                            </div>
                        </div>
                          <div class="col-lg-4 col-sm-6 col-xs-12">
                              <div class="r4_counter db_box">
                                  <div class="icon-after cc USDT-alt"></div>
                                  <i class='pull-left cc USDT-alt icon-md icon-primary mt-10'></i>
                                  <div class="stats">
                                      <h3 class="mb-5">{{ round( $interest + 0, 2) }}</h3>
                                      <span>Available Profit</span>
                                  </div>
                              </div>
                          </div>
                          <div class="col-lg-4 col-sm-6 col-xs-12">
                            <div class="r4_counter db_box">
                                <div class="icon-after cc USDT-alt"></div>
                                <i class='pull-left cc USDT-alt icon-md icon-primary mt-10'></i>
                                <div class="stats">
                                    <h3 class="mb-5">{{ round($bonusamount + 0, 2) }}</h3>
                                    <span>Available Bonus</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                          <div class="r4_counter db_box">
                              <div class="icon-after cc USDT-alt"></div>
                              <i class='pull-left cc USDT-alt icon-md icon-primary mt-10'></i>
                              <div class="stats">
                                  <h3 class="mb-5">{{ round($withdraw + 0, 2) }}</h3>
                                  <span>Withdraw</span>
                              </div>
                          </div>
                      </div>
                      </div>
                      <!-- End .row -->
                  </div>
              </section>
          </div>

          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->
          <div class="col-lg-10">
              <!-- TradingView Widget BEGIN -->
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/key-events/" rel="noopener" target="_blank"><span class="blue-text">Daily news roundup</span></a> by TradingView</div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                {
                "feedMode": "all_symbols",
                "colorTheme": "light",
                "isTransparent": false,
                "displayMode": "regular",
                "width": "100%",
                "height": 830,
                "locale": "en"
              }
                </script>
              </div>
              <!-- TradingView Widget END -->
          </div>
          <div class="col-lg-10">
            <div class="content-body">
              <div class="row">
                  <div class="col-xs-12">
                      <h4 class="bold no-mt">Refer Us & Earn</h4>
                      {{-- <h4><small>Welcome to our affiliate program, Read our affiliate program terms and conditions <a href="#" class="color-primary">here</a></small></h4> --}}
                      <h5 class="mt-20 bold mb-20">Your Affiliate Link is</h5>
                      <div class="form-group has-focus">
                          <div class="input-group">
                              <input type="text" style="color:aliceblue" class="form-control bg-white" id="field-12" value="{{ Route('register',['ref' => auth()->user()->referralId]) }}" value="{{ Route('register',['ref' => auth()->user()->referralId]) }}"readonly>
                              <a href="#" class="input-group-addon"  data-color-class="primary" data-animate=" animated fadeIn" data-toggle="tooltip" data-original-title="copy" data-placement="top"><i class="fa fa-copy text-dark"></i></a>
                          </div>
                      </div>
                      
                  </div>
              </div>
          </div>
          </div>
       

          <div class="clearfix"></div>


          <div class="clearfix"></div>


          <div class="col-lg-12">
              <section class="box" style="border-left: 3px solid #e77512;">
                  <header class="panel_header">
                      <h2 class="title pull-left">Recent activities</h2>
                      <div class="actions panel_actions pull-right">
                          <a class="box_toggle fa fa-chevron-down"></a>
                          <a class="box_setting fa fa-cog" data-toggle="modal" href="#section-settings"></a>
                          <a class="box_close fa fa-times"></a>
                      </div>
                  </header>
                  <div class="content-body">
                      <div class="row">
                          <div class="col-xs-12">

                              <div class="table-responsive" data-pattern="priority-columns">
                                  <table id="tech-companies-1" class="table table-small-font no-mb table-bordered table-striped">
                                      <thead>
                                          <tr>
                                              <th>Transaction Id</th>
                                              <th data-priority="1">Amount</th>
                                              <th data-priority="1">Type</th>
                                              <th data-priority="3">Status</th>
                                              <th data-priority="1">Date</th>
                                      </thead>
                                      @foreach ( $data as $dat )

                                      <tbody>
                                          <tr>
                                              <th><i class="fa fa-dot-circle-o complete"></i> {{ $dat->transactionId }}</th>
                                              <td>{{ $dat->amount }}</td>
                                              <td>{{ $dat->paymentMethod }}</td>

                                              <td><span class="status-complete">{{ $dat->status }}</span></td>
                                              <td><i class="fa fa-plus complete normal"></i>{{ $dat->created_at }}</td>
                                          </tr>
                                          
                                        

                                      </tbody>
                                      @endforeach
                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>
              </section>
          </div>

          <div class="clearfix"></div>

          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')