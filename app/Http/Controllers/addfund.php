<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class addfund extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }

    public function index()
    {
        $plans = DB::table('packages')->get();
        return view('admin.addfund')->with('plans', $plans);
    }

    public function randomDigit()
    {
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    public function store(Request $request)
    {
        $datauser = DB::table('users')
            ->where('username', $request->username)
            ->first();
        if ($datauser == null) {
            return back()->with('toast_error', 'Invalid Username');
        } else {
            DB::table('transactions')
                ->where('userId', $datauser->userId)
                ->insert([
                    'transactionId' => $this->randomDigit(),
                    'userId' => $datauser->userId,
                    'username' => $datauser->username,
                    'email' => $datauser->email,
                    'amount' => $request->amount,
                    'paymentMethod' => 'Deposit',
                    'coin' => $request->coin,
                    'status' => 'CONFIRM',
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s'),
                ]);

            return back()->with('toast_success', 'Successful');

            if ($request->amount >= 100 && $request->amount < 499) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Starter')
                    ->first();
                DB::table('funds')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
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
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                return back()->with('toast_success', 'Successful');
            } elseif ($request->amount >= 500 && $request->amount < 999) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Basic')
                    ->first();

                DB::table('funds')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
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
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                return back()->with('toast_success', 'Successful');
            } elseif ($request->amount >= 5000 && $request->amount <= 50000) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Advanced')
                    ->first();
                DB::table('funds')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
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
                DB::table('transactions')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                return back()->with('toast_success', 'Successful');
            } elseif ($request->amount >= 50000 && $request->amount <= 500000) {
                $planAmount = DB::table('packages')
                    ->where('packageName', 'Premium')
                    ->first();
                DB::table('funds')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
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
                DB::table('transactions')
                    ->where('userId', $datauser->userId)
                    ->insert([
                        'transactionId' => $this->randomDigit(),
                        'userId' => $datauser->userId,
                        'username' => $datauser->username,
                        'email' => $datauser->email,
                        'amount' => $request->amount,
                        'coin' => $request->coin,
                        'paymentMethod' => 'Deposit',
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                // update
                return back()->with('toast_success', 'Successful');
            } else {
                return back()->with('errors', 'Oops!! Invalid Amount Contact Admin');
            }
        }
    }
}
