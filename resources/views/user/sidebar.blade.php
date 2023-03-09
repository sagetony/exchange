       <!-- START CONTAINER -->
       <div class="page-container row-fluid container-fluid">
   <!-- SIDEBAR - START -->

   <div class="page-sidebar fixedscroll">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">


        <ul class='wraplist'>
            <li class='menusection'>Main</li>
            <li class="open">
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-th-large"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            {{-- <li class="">
                <a href="my-wallet.html">
                    <i class="img"><img src="../data/icons/wallet-o.png" style="width:16px" alt=""></i>
                    <span class="title">My Wallet</span>
                </a>
            </li> --}}
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-bullseye"></i>
                    <span class="title">Assets</span>
                    <span class="arrow "></span>

                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{ route("stocks") }}">Stocks</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('bonds') }}">Bonds</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('crypto') }}">Crypto</a>
                    </li>
                    <li>
                        <a class="" href="{{ route('commodity') }}">Commodities</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-line-chart"></i>
                    <span class="title">Report</span>
                    <span class="arrow "></span>

                </a>
                <ul class="sub-menu">
                    {{-- <li>
                        <a class="" href="settings.html">Stocks</a>
                    </li> --}}
                    <li>
                        <a class="" href="{{ route('reportbond') }}">Bonds</a>
                    </li>
                    <li>
                        <a class="" href="{{ route("reportcrypto") }}">Crypto</a>
                    </li>
                    {{-- <li>
                        <a class="" href="account-confirmation.html">Commodities</a>
                    </li> --}}
                </ul>
            </li>
           
           
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-percent"></i>
                    <span class="title">Tax Center</span>
                    <span class="arrow "></span>

                </a>

                    <ul class="sub-menu">
                        <li>
                            <a class="" href="{{ route('fund') }}">Deposit</a>
                        </li>
                        <li>
                            <a class="" href="{{ route('tax') }}">Tax</a>
                        </li>
                       
                    </ul>
                
            </li>
            {{-- <li class="">
                <a href="buy-and-sell.html">
                    <i class="img">
                        <img src="../data/icons/coins.png" style="width:16px" alt="">
                    </i>
                    <span class="title">Copy Trading</span>
                </a>
            </li> --}}
            <li class="">
                <a href="{{ route('swap') }}">
                    <i class="fa fa-exchange"></i>
                    <span class="title">Currency Exchange</span>
                </a>
            </li>

            <li class="">
                <a href="{{ route('withdraw') }}">
                    <i class="fa fa-credit-card"></i>
                    <span class="title">Withdraw</span>
                </a>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-money"></i>
                    <span class="title">Transactions</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{ route('deposithistory') }}">Deposit History</a>
                    </li>
                    <li>
                        <a class="" href="{{ route("withdrawhistory") }}">Withdrawal History</a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-bullseye"></i>
                    <span class="title">Trading</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                  <li>
                    <a class="" href="{{ route('trading') }}">Trade</a>
                </li>
                    <li>
                        <a class="" href="settings.html">Trade History</a>
                    </li>
                   
                </ul>
            </li>
            <li class="">
                <a href="{{ route('signal') }}">
                    <i class="fa-solid fa-signal"></i>                            
                    <span class="title">Signals</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('buypackage') }}">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">Package</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route("member") }}">
                    <i class="fa fa-crosshairs"></i>
                    <span class="title">Affiliate Program</span>
                </a>
            </li>
            {{-- <li class="">
                <a href="index-ico-admin.html">
                    <i class="fa fa-sitemap"></i>
                    <span class="title">ICO Listing</span>
                </a>
            </li> --}}
            <li class="">
                <a href="{{ route('insurance') }}">
                    <i class="fa fa-exclamation-triangle"></i>
                    <span class="title">Insurance</span>
                </a>
            </li>
            <li class="">
                <a href="index-ico-user.html">
                    <i class="fa fa-user"></i>
                    <span class="title">KYC</span>
                </a>
            </li>
            <li class="">
                <a href="{{ route('security') }}">
                    <i class="fa-solid fa-passport"></i>
                    <span class="title">Security</span>
                </a>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-gear"></i>
                    <span class="title">Settings</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a class="" href="{{ route('profile') }}">Account Settings</a>
                    </li>
                    <!-- <li>
                        <a class="" href="account-confirmation.html">Account Confirmation</a>
                    </li> -->
                </ul>
            </li>
          
            <li class="">
                <a href="javascript:;">
                    <i class="fa fa-question-circle"></i>
                    <span class="title">Support</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                  
                    <li>
                        <a class="" href="ui-support.html">Help center</a>
                    </li>
                    {{-- <li>
                        <a class="" href="ui-support.html">Terms and Condition</a>
                    </li> --}}
                </ul>
            </li>
            <li class="">
                <a href="{{ route('logout') }}">
                    <i class="fa fa-lock"></i>
                    <span class="title">Logout</span>
                </a>
                
            </li>
           
            
        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>
<!--  SIDEBAR - END -->