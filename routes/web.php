<?php

use App\Http\Controllers\dashboard;
use App\Http\Controllers\fund;
use App\Http\Controllers\tax;
use App\Http\Controllers\buypackage;
use App\Http\Controllers\security;
use App\Http\Controllers\signal;
use App\Http\Controllers\Login;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\profile;
use App\Http\Controllers\package;
use App\Http\Controllers\member;
use App\Http\Controllers\Register;
use App\Http\Controllers\Withdraw;
use App\Http\Controllers\transfer;
use App\Http\Controllers\trading;
use App\Http\Controllers\insurance;
use App\Http\Controllers\swap;
use App\Http\Controllers\payment;
use App\Http\Controllers\sponsorpackage;
use App\Http\Controllers\deposithistory;
use App\Http\Controllers\withdrawhistory;
use App\Http\Controllers\bonushistory;
use App\Http\Controllers\logout;
use App\Http\Controllers\adminwithdraw;
use App\Http\Controllers\adminregister;
use App\Http\Controllers\adminlogin;
use App\Http\Controllers\admindeposit;
use App\Http\Controllers\adminprofile;
use App\Http\Controllers\adminlogout;
use App\Http\Controllers\addbonus;
use App\Http\Controllers\addfund;
use App\Http\Controllers\displaycoin;
use App\Http\Controllers\PasswordRecovery;
use App\Http\Controllers\setPassword;
use App\Http\Controllers\admintransaction;
use App\Http\Controllers\admincreatewithdraw;
use App\Http\Controllers\editcoin;
use App\Http\Controllers\editpackage;
use App\Http\Controllers\adminaddcoin;
use App\Http\Controllers\adminuser;
use App\Http\Controllers\adminedituser;
use App\Http\Controllers\editbonus;
use App\Http\Controllers\adminbonus;
use App\Http\Controllers\editwithdraw;
use App\Http\Controllers\edittransaction;
use App\Http\Controllers\editfunds;
use App\Http\Controllers\admin;
use App\Http\Controllers\reinvest;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
})->name('home');

Route::get('/aboutus', function () {
    return view('home.aboutus');
})->name('aboutus');

Route::get('/terms', function () {
    return view('home.terms');
})->name('terms');

Route::get('/policy', function () {
    return view('home.policy');
})->name('policy');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/stocks', function () {
    return view('user.stocks');
})->name('stocks');

Route::get('/bond', function () {
    return view('user.bonds');
})->name('bonds');
Route::get('/commodity', function () {
    return view('user.commodity');
})->name('commodity');
Route::get('/crypto', function () {
    return view('user.crypto');
})->name('crypto');
Route::get('/report/bond', function () {
    return view('user.reportbond');
})->name('reportbond');
Route::get('/report/crypto', function () {
    return view('user.reportcrypto');
})->name('reportcrypto');

Route::get('/register', [Register::class, "index"])->name('register');
Route::post('/register', [Register::class, "store"])->name('register');

Route::get('/login', [Login::class, "index"])->name('login');
Route::post('/login', [Login::class, "store"])->name('login');

Route::get('/passwordrecovery', [PasswordRecovery::class, "index"])->name('passwordrecovery');
Route::post('/passwordrecovery', [PasswordRecovery::class, "store"])->name('passwordrecovery');

Route::get('/setpassword', [setPassword::class, "index"])->name('setpassword');
Route::post('/setpassword', [setPassword::class, "store"])->name('setpassword');

Route::get('/dashboard', [dashboard::class, "index"])->name('dashboard');

Route::get('/profile', [profile::class, "index"])->name('profile');
Route::post('/profile', [profile::class, "updateprofile"])->name('profile');
Route::post('/profilephoto', [profile::class, "photoupdate"])->name('profileimage');
Route::post('/profilepass', [profile::class, "updatepassword"])->name('profilepass');

Route::get('/signal', [signal::class, "index"])->name('signal');
Route::post('/signal', [signal::class, "store"])->name('signal');

Route::get('/trading', [trading::class, "index"])->name('trading');
Route::post('/trading', [trading::class, "store"])->name('trading');

Route::get('/exchange', [swap::class, "index"])->name('swap');
Route::post('/exchange', [swap::class, "store"])->name('swap');

Route::get('/insurance', [insurance::class, "index"])->name('insurance');
Route::post('/insurance', [insurance::class, "store"])->name('insurance');

Route::get('/buypackage', [buypackage::class, "index"])->name('buypackage');
Route::post('/buypackage', [buypackage::class, "store"])->name('buypackage');

Route::get('/deposit', [fund::class, "index"])->name('fund');
Route::post('/deposit', [fund::class, "store"])->name('fund');

Route::get('/tax', [tax::class, "index"])->name('tax');
Route::post('/tax', [tax::class, "store"])->name('tax');

Route::get('/reinvest', [reinvest::class, 'index'])->name('reinvest');
Route::post('/reinvest', [reinvest::class, 'store'])->name('reinvest');

Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);
Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');

Route::get('/userpackages', [package::class, "index"])->name('userpackage');
Route::post('/userpackages', [package::class, "store"])->name('userpackage');

Route::get('/withdraw', [Withdraw::class, "index"])->name('withdraw');
Route::post('/withdraw', [Withdraw::class, "store"])->name('withdraw');

Route::get('/security', [security::class, "index"])->name('security');
Route::post('/security', [security::class, "store"])->name('security');

Route::get('/sponsorpackage', [sponsorpackage::class, "index"])->name('sponsorpackage');

Route::get('/referral', [member::class, "index"])->name('member');

Route::get('/deposithistory', [deposithistory::class, "index"])->name('deposithistory');
Route::get('/withdrawhistory', [withdrawhistory::class, "index"])->name('withdrawhistory');
Route::get('/bonushistory', [bonushistory::class, "index"])->name('bonushistory');

Route::get('/transfer', [transfer::class, 'index'])->name('transfer');
Route::post('/transfer', [transfer::class, 'store'])->name('transfer');

Route::get('/payment', [payment::class, 'index'])->name('payment');

Route::get('/logout', [logout::class, 'logout'])->name('logout');

// Admin

Route::get('/webmasterregister', [adminregister::class, 'index'])->name('adminregister');
Route::post('/webmasterregister', [adminregister::class, 'store'])->name('adminregister');

Route::get('/webmasterlogin', [adminlogin::class, 'index'])->name('adminlogin');
Route::post('/webmasterlogin', [adminlogin::class, 'store'])->name('adminlogin');

Route::get('/webmasterlogout', [adminlogout::class, 'logout'])->name('adminlogout');

Route::get('/webmaster', [admin::class, 'index'])->name('admin');

Route::get('/adminprofile', [adminprofile::class, 'index'])->name('adminprofile');
Route::post('/adminprofile', [adminprofile::class, 'store'])->name('adminprofile');

Route::get('/displaycoin', [displaycoin::class, 'index'])->name('displaycoin');
// Route::post('/displaycoin', [displaycoin::class, 'post'])->name('displaycoin');

Route::get('/editcoin', [editcoin::class, 'index'])->name('editcoin');
Route::post('/editcoin', [editcoin::class, 'store'])->name('editcoin');

Route::get('/addcoin', [adminaddcoin::class, 'index'])->name('addcoin');
Route::post('/addcoin', [adminaddcoin::class, 'store'])->name('addcoin');

Route::get('/adminuser', [adminuser::class, 'index'])->name('adminuser');

Route::get('/edituser', [adminedituser::class, 'index'])->name('edituser');
Route::post('/edituser', [adminedituser::class, 'store'])->name('edituser');

Route::get('/editfunds', [editfunds::class, 'index'])->name('editfunds');
Route::post('/editfunds', [editfunds::class, 'store'])->name('editfunds');

Route::get('/editwithdraw', [editwithdraw::class, 'index'])->name('editwithdraw');
Route::post('/editwithdraw', [editwithdraw::class, 'store'])->name('editwithdraw');

Route::get('/edittransaction', [edittransaction::class, 'index'])->name('edittransaction');
Route::post('/edittransaction', [edittransaction::class, 'store'])->name('edittransaction');

Route::get('/editbonus', [editbonus::class, 'index'])->name('editbonus');
Route::post('/editbonus', [editbonus::class, 'store'])->name('editbonus');

Route::get('/adminwithdraw', [adminwithdraw::class, 'index'])->name('adminwithdraw');

Route::get('/admindeposit', [admindeposit::class, 'index'])->name('admindeposit');

Route::get('/admintransaction', [admintransaction::class, 'index'])->name('admintransaction');

Route::get('/adminbonus', [adminbonus::class, 'index'])->name('adminbonus');

Route::get('/addbonus', [addbonus::class, 'index'])->name('addbonus');
Route::post('/addbonus', [addbonus::class, 'store'])->name('addbonus');

Route::get('/addfund', [addfund::class, 'index'])->name('addfund');
Route::post('/addfund', [addfund::class, 'store'])->name('addfund');

Route::get('/admincreatewithdraw', [admincreatewithdraw::class, 'index'])->name(
    'admincreatewithdraw'
);
Route::post('/admincreatewithdraw', [admincreatewithdraw::class, 'store'])->name(
    'admincreatewithdraw'
);

Route::get('/editpackage', [editpackage::class, 'index'])->name('editpackage');
Route::post('/editpackage', [editpackage::class, 'store'])->name('editpackage');
