<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class swap extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $databtc = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'Bitcoin')
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $datausdt = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'USDT (TRC20)')
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $dataeth = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'Ethereum')
            ->where('status', 'CONFIRM')
            ->sum('amount');

        $ch = curl_init('https://min-api.cryptocompare.com/data/price?fsym=BTC&tsyms=USD');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        //$exchangeRates = json_decode($json);
        $respBTC = json_decode($json);

        $ch = curl_init('https://min-api.cryptocompare.com/data/price?fsym=ETH&tsyms=USD');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);

        // Decode JSON response:
        //$exchangeRates = json_decode($json);
        $respETH = json_decode($json);

        return view('user.swap')
            ->with('dataeth', $dataeth)
            ->with('datausdt', $datausdt)
            ->with('databtc', $databtc)
            ->with('respBTC', $respBTC)
            ->with('respETH', $respETH);
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba"), 0, 36);
        return $pass;
    }
    public function store(Request $request)
    {
        $databtc = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'Bitcoin')
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $datausdt = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'USDT (TRC20)')
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $dataeth = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', 'Ethereum')
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $datacoin = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', $request->swapcoin)
            ->where('status', 'CONFIRM')
            ->first();
        $datacoinUpdate = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', $request->swapcoin)
            ->where('status', 'CONFIRM')
            ->sum('amount');

        if ($request->coin == 'Bitcoin') {
            if ($request->amount <= $databtc) {
                $datacoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', $request->swapcoin)
                    ->where('status', 'CONFIRM')
                    ->sum('amount');

                if ($datacoin != null) {
                    // Update Swapcoin
                    $newamountswapcoin = $datacoinUpdate + $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', $request->swapcoin)
                        ->update(['amount' => $newamountswapcoin]);

                    // Update Bitcoin
                    $databtccoin = DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'Bitcoin')
                        ->where('status', 'CONFIRM')
                        ->sum('amount');
                    $newamount = $databtccoin - $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'Bitcoin')
                        ->update(['amount' => $newamount]);
                    return back()->with('success', 'Exchange Successful');
                } else {
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->insert([
                            'transactionId' => $this->randomDigit(),
                            'userId' => auth()->user()->userId,
                            'username' => auth()->user()->username,
                            'email' => auth()->user()->email,
                            'amount' => $request->amount,
                            'coin' => $request->swapcoin,
                            'status' => 'CONFIRM',
                            "created_at" => date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s'),
                        ]);
                }

                $databtccoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'Bitcoin')
                    ->where('status', 'CONFIRM')
                    ->sum('amount');

                $newamount = $databtccoin - $request->amount;

                DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'Bitcoin')
                    ->update(['amount' => $newamount]);
                return back()->with('success', 'Exchange Successful');
            } else {
                return back()->with('errors', 'Insufficient fund for exchange');
            }
        } elseif ($request->coin == 'Ethereum') {
            if ($request->amount <= $dataeth) {
                $datacoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', $request->swapcoin)
                    ->where('status', 'CONFIRM')
                    ->sum('amount');

                if ($datacoin != null) {
                    // Update Swapcoin
                    $newamountswapcoin = $datacoinUpdate + $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', $request->swapcoin)
                        ->update(['amount' => $newamountswapcoin]);

                    // Update Ethereum
                    $dataethcoin = DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'Ethereum')
                        ->where('status', 'CONFIRM')
                        ->sum('amount');
                    $newamount = $databtc - $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'Ethereum')
                        ->update(['amount' => $newamount]);
                } else {
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->insert([
                            'transactionId' => $this->randomDigit(),
                            'userId' => auth()->user()->userId,
                            'username' => auth()->user()->username,
                            'email' => auth()->user()->email,
                            'amount' => $request->amount,
                            'coin' => $request->swapcoin,
                            'status' => 'CONFIRM',
                            "created_at" => date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s'),
                        ]);
                }

                $dataethcoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'Ethereum')
                    ->where('status', 'CONFIRM')
                    ->sum('amount');

                $newamount = $dataethcoin - $request->amount;

                DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'Ethereum')
                    ->update(['amount' => $newamount]);
                return back()->with('success', 'Exchange Successful');
            } else {
                return back()->with('errors', 'Insufficient fund for exchange');
            }
        } elseif ($request->coin == 'USDT (TRC20)') {
            if ($request->amount <= $datausdt) {
                $datacoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', $request->swapcoin)
                    ->where('status', 'CONFIRM')
                    ->sum('amount');

                if ($datacoin != null) {
                    // Update Swapcoin
                    $newamountswapcoin = $datacoinUpdate + $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', $request->swapcoin)
                        ->update(['amount' => $newamountswapcoin]);

                    // Update Ethereum
                    $datausdtcoin = DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'USDT (TRC20)')
                        ->where('status', 'CONFIRM')
                        ->sum('amount');
                    $newamount = $datusdtcoin - $request->amount;
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->where('coin', 'USDT (TRC20)')
                        ->update(['amount' => $newamount]);
                } else {
                    DB::table('swaps')
                        ->where('userId', auth()->user()->userId)
                        ->insert([
                            'transactionId' => $this->randomDigit(),
                            'userId' => auth()->user()->userId,
                            'username' => auth()->user()->username,
                            'email' => auth()->user()->email,
                            'amount' => $request->amount,
                            'coin' => $request->swapcoin,
                            'status' => 'CONFIRM',
                            "created_at" => date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s'),
                        ]);
                }

                $datausdtcoin = DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'USDT (TRC20)')
                    ->where('status', 'CONFIRM')
                    ->first('amount');

                $newamount = $datausdtcoin - $request->amount;

                DB::table('swaps')
                    ->where('userId', auth()->user()->userId)
                    ->where('coin', 'USDT (TRC20)')
                    ->update(['amount' => $newamount]);
                return back()->with('success', 'Exchange Successful');
            } else {
                return back()->with('errors', 'Insufficient fund for exchange');
            }
        } else {
            return back()->with('errors', 'Oops!! Contact Admin');
        }
    }
}
