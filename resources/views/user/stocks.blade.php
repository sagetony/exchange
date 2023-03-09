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
                      <h1 class="title">Stock Assets</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
              <section class="box nobox marginBottom0">
                  <div class="content-body">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stocks today</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "exchange": "US",
                            "showChart": true,
                            "locale": "en",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": false,
                            "showFloatingTooltip": false,
                            "width": "100%",
                            "height": "600",
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(106, 109, 120, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
                        }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                  
                     
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