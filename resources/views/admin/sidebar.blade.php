            <!-- main-sidebar opened -->
            <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
            <aside class="app-sidebar sidebar-scroll ">
                <div class="main-sidebar-header">
                    <a class=" desktop-logo logo-light" href="./"><img src="{{ asset("asset/images/resources/logo-3.png") }}" width="100" class="main-logo" alt="logo"></a>
                    <a class=" desktop-logo logo-dark" href="./"><img src="{{ asset("asset/images/resources/logo-3.png") }}" width="100" class="main-logo dark-theme" alt="logo"></a>
                    <a class="logo-icon mobile-logo icon-light" href="./"><img src="{{ asset("asset/images/resources/logo-3.png") }}" width="100" class="logo-icon" alt="logo"></a>
                    <a class="logo-icon mobile-logo icon-dark" href="./"><img src="{{ asset("asset/images/resources/logo-3.png") }}" width="100" class="logo-icon dark-theme" alt="logo"></a>
                </div>
                <div class="main-sidebar-body circle-animation ">
            
                    <ul class="side-menu circle">
                        <li><h3 class="">Dashboard</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" href="{{ route('admin') }}"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Dashboard</span></a>
                        </li>
                          <li><h3>Dashboard</h3></li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">My Account</span><i class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ route('adminprofile') }}">Edit Profile</a></li>
                                <li><a class="slide-item" href="{{ route('displaycoin') }}">Edit Wallet Address</a></li>
                                <li><a class="slide-item" href="{{ route('addcoin') }}">Add Coin</a></li>
                                {{-- <li><a class="slide-item" href="{{ route('editpackage') }}">Edit Package</a></li> --}}
                            </ul>
                        </li>
                        
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-package"></i><span class="side-menu__label">Manage User</span><i class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ route('adminuser') }}">All Users</a></li>
                                <!-- <li><a class="slide-item" href="deposithistory.php">Add Users</a></li> -->
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-wallet"></i><span class="side-menu__label">Payment</span><i class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                                {{-- <li><a class="slide-item" href="{{ route('admintransaction') }}">Transactions</a></li> --}}
                                <li><a class="slide-item" href="{{ route('admindeposit') }}">Deposits</a></li>
                                <li><a class="slide-item" href="{{ route('adminwithdraw') }}">Withdraws</a></li>
                                <li><a class="slide-item" href="{{ route('adminbonus') }}">Bonus</a></li>

            
                                
                            </ul>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon ti-wallet"></i><span class="side-menu__label">Funding</span><i class="angle fe fe-chevron-down"></i></a>
                            <ul class="slide-menu">
                                <li><a class="slide-item" href="{{ route('addfund') }}">Fund Client</a></li>
                                <li><a class="slide-item" href="{{ route('addbonus') }}">Add Bonus</a></li>
                                <li><a class="slide-item" href="{{ route('admincreatewithdraw') }}">Create Withdraw</a></li>
                          
                            </ul>
                        </li>
                         
                        <li class="slide">
                            <a class="side-menu__item" href="{{ route('adminlogout') }}"><i class="side-menu__icon fas fa-sign-out-alt menu-icons"></i><span class="side-menu__label">Log Out</span></a>
                        </li>
                        
                        </li>
                     
                       
                    </ul>
                </div>
            </aside>