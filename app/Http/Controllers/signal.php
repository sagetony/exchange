<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class signal extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.signal');
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba"), 0, 36);
        return $pass;
    }
    public function store(Request $request)
    {
        DB::table('signals')
            ->where('userId', auth()->user()->userId)
            ->insert([
                'transactionId' => $this->randomDigit(),
                'userId' => auth()->user()->userId,
                'username' => auth()->user()->username,
                'email' => auth()->user()->email,
                'amount' => $request->amount,
                'package' => $request->plan,
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
                'paymentMethod' => 'Signal',
                'coin' => 'Bitcoin',
                'status' => 'CONFIRM',
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
