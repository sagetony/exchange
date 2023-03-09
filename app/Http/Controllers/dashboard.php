<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboard extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('transactions')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->orderByDesc('id')
            ->take(5)
            ->get();
        $coins = DB::table('coins')->get();
        $walletamount = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $interest = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('interest');
        $profit = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('profit');
        $withdraw = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->where('paymentType', 'Capital')
            ->sum('amount');
        $withdrawinterest = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->where('paymentType', 'Interest')
            ->sum('amount');
        $withdrawbonus = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->where('paymentType', 'Bonus')
            ->sum('amount');
        $withdraw = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->sum('amount');
        $withdrawmain = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->where('paymentType', '!=', 'Interest')
            ->sum('amount');
        $datawiti = DB::table('withdraws')
            ->where('userId', auth()->user()->userID)
            ->where('status', 'CONFIRM')
            ->where('paymentType', 'Reinvest')
            ->sum('amount');
        $bonusamount = DB::table('bonuses')
            ->where('status', 'CONFIRM')
            ->where('sponsorId', auth()->user()->referralId)
            ->sum('amount');
        return view('user.dashboard')
            ->with('withdrawmain', $withdrawmain)
            ->with('coins', $coins)
            ->with('withdrawinterest', $withdrawinterest)
            ->with('withdraw', $withdraw)
            ->with('profit', $profit)
            ->with('interest', $interest)
            ->with('withdraw', $withdraw)
            ->with('walletamount', $walletamount)
            ->with('bonusamount', $bonusamount)
            ->with('withdrawbonus', $withdrawbonus)
            ->with('data', $data)
            ->with('datawiti', $datawiti);
    }
}
