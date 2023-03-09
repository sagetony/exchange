<?php

namespace App\Http\Controllers;
use App\Models\withdraw as ModelsWithdraw;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;

class reinvest extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $coins = DB::table('coins')->get();
        $packages = DB::table('packages')->get();
        return view('user.reinvest')
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
        $bonus = DB::table('bonuses')
            ->where('status', 'CONFIRM')
            ->where('sponsorId', auth()->user()->referralId)
            ->sum('amount');
        $interest = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('interest');

        $capital = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->sum('amount');
        $withdraw = DB::table('withdraws')
            ->where('status', 'CONFIRM')
            ->where('userId', auth()->user()->userId)
            ->where('paymentType', 'Capital')
            ->sum('amount');

        $newcap = $bonus + $interest + $capital - $withdraw;
        // return dd($newcap);
        if ($request->amount <= $newcap) {
            if ($request->amount >= 100 && $request->amount < 499) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Starter')
                    ->first();
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
                        'planAmount' => $planAmount->packageAmount,
                        'plan' => 'Starter',
                        'dayCounter' => 77,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // transaction
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                DB::table('users')
                    ->where('userId', auth()->user()->userId)
                    ->update([
                        'plan' => 'Starter',
                    ]);
                $data = DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->orderBy('id', 'desc')
                    ->first();
                return back()->with('toast_success', 'Deposit has been created');
            } elseif ($request->amount >= 500 && $request->amount < 999) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Basic')
                    ->first();

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
                        'planAmount' => $planAmount->packageAmount,
                        'plan' => 'Basic',
                        'dayCounter' => 67,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // transaction
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                DB::table('users')
                    ->where('userId', auth()->user()->userId)
                    ->update([
                        'plan' => 'Basic',
                    ]);
                $data = DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->orderBy('id', 'desc')
                    ->first();
                return back()->with('toast_success', 'Deposit has been created');
            } elseif ($request->amount >= 1000 && $request->amount <= 4999) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Classic')
                    ->first();
                DB::table('funds')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'interest' => 0,
                        'profit' => 0,
                        'planAmount' => $planAmount->packageAmount,
                        'plan' => 'Classic',
                        'dayCounter' => 20,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // transaction
                ModelsWithdraw::create([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentType' => 'Reinvest',
                    'status' => 'CONFIRM',
                    'coin' => 'None',
                    'wallet' => 'None',
                    'paymentMethod' => 'Withdraw',
                ]);
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                DB::table('users')
                    ->where('userId', auth()->user()->userId)
                    ->update([
                        'plan' => 'Classic',
                    ]);
                $data = DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->orderBy('id', 'desc')
                    ->first();
                return back()->with('toast_success', 'Deposit has been created');
            } elseif ($request->amount >= 5000 && $request->amount <= 50000) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Advanced')
                    ->first();
                DB::table('funds')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'interest' => 0,
                        'profit' => 0,
                        'planAmount' => $planAmount->packageAmount,
                        'plan' => 'Advanced',
                        'dayCounter' => 20,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // transaction
                ModelsWithdraw::create([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentType' => 'Reinvest',
                    'status' => 'CONFIRM',
                    'coin' => 'None',
                    'wallet' => 'None',
                    'paymentMethod' => 'Withdraw',
                ]);
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                DB::table('users')
                    ->where('userId', auth()->user()->userId)
                    ->update([
                        'plan' => 'Advanced',
                    ]);
                $data = DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->orderBy('id', 'desc')
                    ->first();
                return back()->with('toast_success', 'Deposit has been created');
            } elseif ($request->amount >= 50000 && $request->amount <= 500000) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Premium')
                    ->first();
                DB::table('funds')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'interest' => 0,
                        'profit' => 0,
                        'planAmount' => $planAmount->packageAmount,
                        'plan' => 'Premium',
                        'dayCounter' => 0,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // transaction
                ModelsWithdraw::create([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentType' => 'Reinvest',
                    'status' => 'CONFIRM',
                    'coin' => 'None',
                    'wallet' => 'None',
                    'paymentMethod' => 'Withdraw',
                ]);
                DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => auth()->user()->userId,
                        'username' => auth()->user()->username,
                        'email' => auth()->user()->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                DB::table('users')
                    ->where('userId', auth()->user()->userId)
                    ->update([
                        'plan' => 'Premium',
                    ]);
                $data = DB::table('transactions')
                    ->where('userId', auth()->user()->userId)
                    ->orderBy('id', 'desc')
                    ->first();
                return back()->with('toast_success', 'Deposit has been created');
            } else {
                return back()->with('errors', 'Oops!! Invalid Amount Contact Admin');
            }
        } else {
            return back()->with('toast_error', 'Insufficient Amount');
        }
    }
}
