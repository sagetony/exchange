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
                      <h1 class="title">Report On Cryto Assets</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
              <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/cryptocurrencies/prices-all/" rel="noopener" target="_blank"><span class="blue-text">Crypto markets</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                    {
                    "width": "100%",
                    "height": 490,
                    "defaultColumn": "overview",
                    "screener_type": "crypto_mkt",
                    "displayCurrency": "USD",
                    "colorTheme": "light",
                    "locale": "en"
                }
                    </script>
                </div>
                <!-- TradingView Widget END -->
          </div>

          <div class="clearfix"></div>
          <!-- MAIN CONTENT AREA STARTS -->
       
          <!-- MAIN CONTENT AREA ENDS -->
      </div>
  </section>
  <!-- END CONTENT -->
                 
@include('user.footer')