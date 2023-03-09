<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class trading extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.trading');
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba"), 0, 36);
        return $pass;
    }

    public function store(Request $request)
    {
        $datacapital = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('amount');

        $databonus = DB::table('bonuses')
            ->where('sponsorId', auth()->user()->referralId)
            ->sum('amount');

        $withcapital = DB::table('withdraws')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->where('paymentType', 'Capital')
            ->sum('amount');

        $newamount = $datacapital + $databonus - $withcapital;

        if ($request->input('action') == 'Buy') {
            if ($newamount >= $request->amount) {
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'paymentMethod' => 'Trade',
                        'coin' => 'Bitcoin',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                DB::table('trades')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'tradeId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'market' => $request->market,
                        'pair' => $request->pair,
                        'timer' => $request->timer,
                        'indicator' => 'Buy',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                return back()->with('success', 'Trade has been created');
            } else {
                return back()->with('errors', 'Insufficient fund for trading');
            }
        } else {
            if ($newamount >= $request->amount) {
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'paymentMethod' => 'Trade',
                        'coin' => 'Bitcoin',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                DB::table('trades')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'tradeId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'market' => $request->market,
                        'pair' => $request->pair,
                        'timer' => $request->timer,
                        'indicator' => 'Sell',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                return back()->with('success', 'Trade has been created');
            } else {
                return back()->with('errors', 'Insufficient fund for trading');
            }
        }
    }
}
