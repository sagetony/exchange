<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class fund extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $coins = DB::table('coins')->get();
        $packages = DB::table('packages')->get();
        return view('user.fund')
            ->with('coins', $coins)
            ->with('packages', $packages);
    }

    public function randomDigit()
    {
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bdcd6a1a9b3eae5091fba"), 0, 36);
        return $pass;
    }

    public function store(Request $request)
    {
        $datacoin = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', $request->coin)
            ->where('status', 'CONFIRM')
            ->first();
        $datacoinUpdate = DB::table('swaps')
            ->where('userId', auth()->user()->userId)
            ->where('coin', $request->coin)
            ->where('status', 'CONFIRM')
            ->sum('amount');

        if ($datacoin != null) {
            $newamountswapcoin = $datacoinUpdate + $request->amount;
            DB::table('swaps')
                ->where('userId', auth()->user()->userId)
                ->where('coin', $request->swapcoin)
                ->update(['amount' => $newamountswapcoin]);

            DB::table('funds')
                ->where('userId', auth()->user()->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'interest' => 0,
                    'profit' => 0,
                    'coin' => $request->coin,
                    'planAmount' => 'NONE',
                    'plan' => "Deposit",
                    'dayCounter' => 0,
                    'status' => 'PENDING',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);

            DB::table('transactions')
                ->where('userId', auth()->user()->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentMethod' => 'Deposit',
                    'coin' => $request->coin,
                    'status' => 'PENDING',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);

            $data = DB::table('transactions')
                ->where('userId', auth()->user()->userId)
                ->orderBy('id', 'desc')
                ->first();

            return redirect()->route('payment', ['id' => $data->transactionId]);
        } else {
            DB::table('funds')
                ->where('userId', auth()->user()->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'interest' => 0,
                    'profit' => 0,
                    'coin' => $request->coin,
                    'planAmount' => 'NONE',
                    'plan' => "Deposit",
                    'dayCounter' => 0,
                    'status' => 'PENDING',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);
            DB::table('swaps')
                ->where('userId', auth()->user()->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'coin' => $request->coin,
                    'status' => 'CONFIRM',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);
            DB::table('transactions')
                ->where('userId', auth()->user()->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentMethod' => 'Deposit',
                    'coin' => $request->coin,
                    'status' => 'PENDING',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);

            $data = DB::table('transactions')
                ->where('userId', auth()->user()->userId)
                ->orderBy('id', 'desc')
                ->first();

            return redirect()->route('payment', ['id' => $data->transactionId]);
        }
    }
}
