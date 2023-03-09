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
                      <h1 class="title">Bond and Indices Assets</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
              <section class="box nobox marginBottom0">
                  <div class="content-body">
                       <!--START theFinancials.com Content-->
                        <!--copyright theFinancials.com - All Rights Reserved-->
                        <!--Get Help by Calling 1.843.886.3635-->
                        <!--specify the width of this Widget by changing '&width=0' at the end of the installation code. -->
                        <!--Use '&width=100%' to force the Widget to fill its parent container or leave it as 0 for default width-->
                        {{-- <script type='text/javascript' src='https://www.thefinancials.com/Widget.aspx?pid=FREE&mode=js&wid=0342806715'></script> --}}
                        <!--END theFinancials.com Content-->

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/indices/" rel="noopener" target="_blank"><span class="blue-text">Indices</span></a>, <a href="https://www.tradingview.com/markets/futures/" rel="noopener" target="_blank"><span class="blue-text">Futures</span></a> <span class="blue-text">and</span> <a href="https://www.tradingview.com/markets/bonds/" rel="noopener" target="_blank"><span class="blue-text">Bonds</span></a> by TradingView</div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
                            {
                            "colorTheme": "light",
                            "dateRange": "12M",
                            "showChart": true,
                            "locale": "en",
                            "largeChartUrl": "",
                            "isTransparent": false,
                            "showSymbolLogo": true,
                            "showFloatingTooltip": false,
                            "width": "100%",
                            "height": "660",
                            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                            "gridLineColor": "rgba(240, 243, 250, 0)",
                            "scaleFontColor": "rgba(106, 109, 120, 1)",
                            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                            "tabs": [
                            {
                                "title": "Indices",
                                "symbols": [
                                {
                                    "s": "FOREXCOM:SPXUSD",
                                    "d": "S&P 500"
                                },
                                {
                                    "s": "FOREXCOM:NSXUSD",
                                    "d": "US 100"
                                },
                                {
                                    "s": "FOREXCOM:DJI",
                                    "d": "Dow 30"
                                },
                                {
                                    "s": "INDEX:NKY",
                                    "d": "Nikkei 225"
                                },
                                {
                                    "s": "INDEX:DEU40",
                                    "d": "DAX Index"
                                },
                                {
                                    "s": "FOREXCOM:UKXGBP",
                                    "d": "UK 100"
                                }
                                ],
                                "originalTitle": "Indices"
                            },
                            {
                                "title": "Futures",
                                "symbols": [
                                {
                                    "s": "CME_MINI:ES1!",
                                    "d": "S&P 500"
                                },
                                {
                                    "s": "CME:6E1!",
                                    "d": "Euro"
                                },
                                {
                                    "s": "COMEX:GC1!",
                                    "d": "Gold"
                                },
                                {
                                    "s": "NYMEX:CL1!",
                                    "d": "Crude Oil"
                                },
                                {
                                    "s": "NYMEX:NG1!",
                                    "d": "Natural Gas"
                                },
                                {
                                    "s": "CBOT:ZC1!",
                                    "d": "Corn"
                                }
                                ],
                                "originalTitle": "Futures"
                            },
                            {
                                "title": "Bonds",
                                "symbols": [
                                {
                                    "s": "CME:GE1!",
                                    "d": "Eurodollar"
                                },
                                {
                                    "s": "CBOT:ZB1!",
                                    "d": "T-Bond"
                                },
                                {
                                    "s": "CBOT:UB1!",
                                    "d": "Ultra T-Bond"
                                },
                                {
                                    "s": "EUREX:FGBL1!",
                                    "d": "Euro Bund"
                                },
                                {
                                    "s": "EUREX:FBTP1!",
                                    "d": "Euro BTP"
                                },
                                {
                                    "s": "EUREX:FGBM1!",
                                    "d": "Euro BOBL"
                                }
                                ],
                                "originalTitle": "Bonds"
                            }
                            ]
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