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
                      <h1 class="title">TRADING SIGNAL PLANS
                    </h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-xs-12">

            <!-- start -->

            <div class="pricing-tables">

                <div class="row">
                    <div class="col-sm-4">

                        <div class="price-pack">
                            <form action="{{ route('signal') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>1 Month Plan</h3>
    
                                </div>
    
                                <ul class="item-list list-unstyled">
                                    <li><strong> Direct Trading Signals from the </strong> Brokerage</li>
                                    <li>
                                        <strong> 24/7 access to </strong> trading.</li>
                                    <li><strong>Increased asset leverage:</strong>  up-to 70x.</li>
    
                                </ul>
    
                                <div class="price">
                                    <h3><span class="symbol">$</span>1,500</h3>
                                </div>
                                <input type="hidden" name="amount" value="1500">
                                <input type="hidden" name="plan" value="1month">

                                <button type="submit" class="btn btn-lg btn-default">BUY</button>
                            </form>
                           

                        </div>

                    </div>

                    <div class="col-sm-4 ">
                        <div class="price-pack recommended">

                            <form action="{{ route('signal') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>2 Month Plan</h3>
    
                                </div>
    
                                <ul class="item-list list-unstyled">
                                    <li><strong> Direct Trading Signals from the </strong> Brokerage</li>
                                    <li>
                                        <strong> 24/7 access to </strong> trading.</li>
                                    <li><strong>Daily Market Reviews and Financial research.</strong> </li>
                                    <li><strong>Increased asset leverage:</strong>  up-to 70x.</li>
    
                                </ul>
    
                                <div class="price">
                                    <h3><span class="symbol">$</span>2,000</h3>
                                </div>
                                <input type="hidden" name="amount" value="2000">
                                <input type="hidden" name="plan" value="2months">
                                <button type="submit" class="btn btn-lg btn-default">BUY</button>
                            </form>

                        </div>

                    </div>

                    <div class="col-sm-4  ">
                        <div class="price-pack">

                           
                            <form action="{{ route('signal') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>3 Month Plan</h3>
    
                                </div>
    
                                <ul class="item-list list-unstyled">
                                    <li><strong> Direct Trading Signals from the </strong> Brokerage</li>
                                    <li>
                                        <strong> 24/7 access to </strong> trading.</li>
                                        <li>
                                            <strong> Exclusive Account </strong> manager features.</li>
                                            <li>
                                                <strong> Priority Futures </strong> Market trading.</li>
                                    <li><strong>Daily Market Reviews and Financial research.</strong> </li>
                                    <li><strong>Increased asset leverage:</strong>  up-to 70x.</li>
    
                                </ul>
    
                                <div class="price">
                                    <h3><span class="symbol">$</span>2,500</h3>
                                </div>
                                <input type="hidden" name="amount" value="2500">
                                <input type="hidden" name="plan" value="3months">

                                <button type="submit" class="btn btn-lg btn-default">BUY</button>
                            </form>

                        </div>

                    </div>

                </div>
                <!-- row-->

            </div>
            <!-- end -->

        </div>

          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->
       
          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')