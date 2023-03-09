<?php

namespace App\Http\Controllers;
use App\Models\withdraw as ModelsWithdraw;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Withdraw extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $coins = DB::table('coins')->get();
        return view('user.withdraw')->with('coins', $coins);
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba"), 0, 36);
        return $pass;
    }

    public function store(Request $request)
    {
        $datadeposit = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->get();

        $databonus = DB::table('bonuses')
            ->where('sponsorId', auth()->user()->referralId)
            ->where('amount', '>', 0)
            ->sum('amount');

        $withbon = DB::table('withdraws')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->where('paymentType', 'Bonus')
            ->sum('amount');
        $datainterest = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('interest', '>', 0)
            ->sum('interest');

        $withinterest = DB::table('withdraws')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->where('paymentType', 'Interest')
            ->sum('amount');
        $datacapital = DB::table('funds')
            ->where('userId', auth()->user()->userId)
            ->where('amount', '>', 0)
            ->where('status', 'CONFIRM')
            ->sum('amount');

        $withcapital = DB::table('withdraws')
            ->where('userId', auth()->user()->userId)
            ->where('status', 'CONFIRM')
            ->where('paymentType', 'Capital')
            ->sum('amount');
        $newcapital =
            $datacapital + $datainterest + $databonus - $withcapital - $withinterest - $withbon;

        // return dd($newcapital);

        if ($newcapital >= $request->amount) {
            if ($request->amount >= 0) {
                ModelsWithdraw::create([
                    'transactionId' => $this->randomDigit(),
                    'userId' => auth()->user()->userId,
                    'username' => auth()->user()->username,
                    'email' => auth()->user()->email,
                    'amount' => $request->amount,
                    'paymentType' => 'Capital',
                    'status' => 'PENDING',
                    'coin' => $request->coin,
                    'wallet' => $request->wallet,
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
                        'paymentMethod' => 'Withdraw',
                        'coin' => $request->coin,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                return back()->with('success', 'Withdrawal has been created');
            } else {
                return back()->with('errors', 'Insufficient fund for withdrawal');
            }
        } else {
            return back()->with('errors', 'Insufficient fund for withdrawal');
        }
    }
}
