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
                      <h1 class="title">Packages 
                    </h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-xs-12">

            <!-- start -->

            <div class="pricing-tables">

                <div class="row">
                    <div class="col-sm-3">

                        <div class="price-pack">
                            <form action="{{ route('buypackage') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>Starter</h3>
    
                                </div>
    
                                
    
                                <div class="price">
                                    <h3 style="font-size: 30px; font-weight:bold; color:antiquewhite"><span class="symbol"></span>$4,999</h3>
                                </div>
                                <input type="hidden" name="amount" value="4999">
                                <input type="hidden" name="plan" value="starter">

                                <button type="submit" class="btn btn-lg btn-default">Choose Plan</button>
                            </form>
                           

                        </div>

                    </div>

                    <div class="col-sm-3">
                        <div class="price-pack recommended">

                            <form action="{{ route('buypackage') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>Pro</h3>
    
                                </div>
    
                                
    
                                <div class="price">
                                    <h3 style="font-size: 30px; font-weight:bold; color:antiquewhite"><span class="symbol"></span>$14,999</h3>
                                </div>
                                <input type="hidden" name="amount" value="14999">
                                <input type="hidden" name="plan" value="pro">

                                <button type="submit" class="btn btn-lg btn-default">Choose Plan</button>
                            </form>

                        </div>

                    </div>

                    <div class="col-sm-3 ">
                        <div class="price-pack">

                           
                            <form action="{{ route('buypackage') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>Enterprise</h3>
    
                                </div>
    
                                
    
                                <div class="price">
                                    <h3 style="font-size: 30px; font-weight:bold; color:antiquewhite" ><span class="symbol"></span>$50,000</h3>
                                </div>
                                <input type="hidden" name="amount" value="50000">
                                <input type="hidden" name="plan" value="enterprise">

                                <button type="submit" class="btn btn-lg btn-default">Choose Plan</button>
                            </form>

                        </div>

                    </div>

                    <div class="col-sm-3 ">
                        <div class="price-pack">

                           
                            <form action="{{ route('buypackage') }}" method="post">
                                @csrf
                                <div class="head">
                                    <h3>Voyager</h3>
    
                                </div>                                
    
                                <div class="price">
                                    <h4 style="font-size: 30px; font-weight:bold; color:antiquewhite;"><span class="symbol">$</span>500,000</h4>
                                </div>
                                <input type="hidden" name="amount" value="500000">
                                <input type="hidden" name="plan" value="voyager">

                                <button type="submit" class="btn btn-lg btn-default">Choose Plan</button>
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