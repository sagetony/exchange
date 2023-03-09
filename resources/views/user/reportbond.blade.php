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
                      <h1 class="title">Report On Bond Assets</h1>
                      <!-- PAGE HEADING TAG - END -->
                  </div>

              </div>
          </div>
          <div class="col-lg-10">
              <!-- TradingView Widget BEGIN -->
                <div class="tradingview-widget-container">
                    <div class="tradingview-widget-container__widget"></div>
                    <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Stock quotes</span></a> by TradingView</div>
                    <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js" async>
                    {
                    "title": "Stocks",
                    "width": "100%",
                    "height": 450,
                    "locale": "en",
                    "showSymbolLogo": true,
                    "symbolsGroups": [
                    {
                        "name": "Financial",
                        "symbols": [
                        {
                            "name": "NYSE:JPM",
                            "displayName": "Jpmorgan Chase & Co"
                        },
                        {
                            "name": "NYSE:WFC",
                            "displayName": "Wells Fargo Co New"
                        },
                        {
                            "name": "NYSE:BAC",
                            "displayName": "Bank Amer Corp"
                        },
                        {
                            "name": "NYSE:HSBC",
                            "displayName": "Hsbc Hldgs Plc"
                        },
                        {
                            "name": "NYSE:C",
                            "displayName": "Citigroup Inc"
                        },
                        {
                            "name": "NYSE:MA",
                            "displayName": "Mastercard Incorporated"
                        }
                        ]
                    },
                    {
                        "name": "Technology",
                        "symbols": [
                        {
                            "name": "NASDAQ:AAPL",
                            "displayName": "Apple"
                        },
                        {
                            "name": "NASDAQ:GOOGL",
                            "displayName": "Google Inc"
                        },
                        {
                            "name": "NASDAQ:MSFT",
                            "displayName": "Microsoft Corp"
                        },
                        {
                            "name": "NASDAQ:FB",
                            "displayName": "Meta Platforms, Inc"
                        },
                        {
                            "name": "NYSE:ORCL",
                            "displayName": "Oracle Corp"
                        },
                        {
                            "name": "NASDAQ:INTC",
                            "displayName": "Intel Corp"
                        }
                        ]
                    },
                    {
                        "name": "Services",
                        "symbols": [
                        {
                            "name": "NASDAQ:AMZN",
                            "displayName": "Amazon Com Inc"
                        },
                        {
                            "name": "NYSE:BABA",
                            "displayName": "Alibaba Group Hldg Ltd"
                        },
                        {
                            "name": "NYSE:T",
                            "displayName": "At&t Inc"
                        },
                        {
                            "name": "NYSE:WMT",
                            "displayName": "Wal-mart Stores Inc"
                        },
                        {
                            "name": "NYSE:V",
                            "displayName": "Visa Inc"
                        }
                        ]
                    }
                    ],
                    "colorTheme": "light"
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