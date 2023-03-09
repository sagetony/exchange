@include('user.head')
@include('user.header')
@include('user.sidebar')



   <!-- START CONTENT -->
   <div id="main-content" class=" ">
    <section class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Trading</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>


            </div>
        </div>


        <div class="clearfix"></div>

        <div class="col-lg-6">
            <section class="box has-border-left-3">
                <header class="panel_header">
                    <h2 class="title pull-left">Real Account</h2>
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
                              <form action="{{ route('trading') }}" method="POST" id="my-form"> 
                                @csrf
                               
                                <div class="form-group no-mb">                                   
                                    {{-- <label class="form-label">Balance</label> --}}
                                    <span class="desc"></span>

                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            Balance  
                                        </span>
                                        <input type="text" class="form-control" name="balance" value="1000 USD" disabled>
                                    </div>

                                    <div class="input-group mb-10" name="market">
                                        <span class="input-group-addon">Market</span>
                                        
                                        <div class="input-group-btn"  style="width:100%">
                                          <select class="form-control input-lg m-bot15" name="market">
                                            <option value="cryptocurrency">Cryptocurrency</option>
                                            <option value="stock">Stock</option>
                                            <option value="indices">Indices</option>
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
                                  
                              
                                <div class="input-group mb-10" name="pair">
                                    <span class="input-group-addon">Pairs</span>
                                    
                                    <div class="input-group-btn"  style="width:100%">
                                      <select class="form-control input-lg m-bot15" name="pair">
                                        <option value="USDT">USDT</option>
                                        <option value="USDT/BTC">USDT/BTC</option>
                                        <option value="USDT/ETH">USDT/ETH</option>
                                        <option value="USDT/USDC">USDT/USDC</option>
                                        <option value="USDT/TRX">USDT/TRX</option>
                                        <option value="USDT/SOL">USDT/SOL</option>
                                        <option value="USDT/LTC">USDT/LTC</option>
                                        <option value="USDT/BNB">USDT/BNB</option>
                                        <option value="USDT/LINK">USDT/LINK</option>
                                        <option value="USDT/FTT">USDT/FTT</option>
                                        <option value="USDT/SHIB">USDT/SHIB</option>
                                        <option value="USDT/ETC">USDT/ETC</option>
                                        <option value="USDT/ETC">USDT/TFUEL</option>
                                        <option value="USDT/ADA">USDT/ADA</option>
                                        <option value="USDT/VET">USDT/VET</option>
                                    </select>
                                       
                                    </div>

                                </div>
                                <div class="input-group mb-10" name="timer">
                                    <span class="input-group-addon">Timer</span>
                                    
                                    <div class="input-group-btn"  style="width:100%">
                                      <select class="form-control input-lg m-bot15" name="timer">
                                        <option value="300">5MINS</option>
                                        <option value="900">15MINS</option>
                                        <option value="1800">30MINS</option>
                                        <option value="3600">1H</option>
                                        <option value="14400">4H</option>
                                        <option value="86400">1D</option>
                                        <option value="604800">1W</option>
                                        <option value="2628000">1M</option>
                                    </select>
                                    </div>
                                </div>

                                    {{-- <label class="form-label">Trade Amount</label> --}}
                                    <div class="input-group mb-10">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            Trade Amount 
                                        </span>
                                        <input type="text" required class="form-control" name="amount" placeholder="Enter Amount">
                                    </div>                                   
                                    <span>
                                        <button name="action" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" value="Buy" style="width:30%" onclick="myForm()">Buy</button>
                                        <button name="action" class="btn btn-primary btn-lg mt-20 has-gradient-to-right-bottom" value="Sell" style="width:30%" onclick="myForm()">Sell</button>
                                    </span>
                                   
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="clearfix"></div>


        <!-- MAIN CONTENT AREA ENDS -->
    </section>
</div>
<!-- END CONTENT -->
                 
{{-- <script>
    function myForm(){

         // Set the timer duration in seconds
                const timerDuration = 10; // 5 minutes

            // Get the form element
            const form = document.getElementById('my-form');

            // Create the timer
            const timer = setInterval(() => {
                // Decrement the timer duration
                timerDuration--;

                // Update the timer display
                document.getElementById('timer').textContent = timerDuration;

                // Check if the timer has reached zero
                if (timerDuration <= 0) {
                    // Stop the timer
                    clearInterval(timer);

                    // Submit the form
                    form.submit();
                }
            }, 1000);
    }
   
</script> --}}

@include('user.footer')