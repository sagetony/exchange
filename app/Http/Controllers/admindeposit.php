<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Mail\EmailDeposit;
use Illuminate\Support\Facades\Mail;

class admindeposit extends Controller
{
    public function __construct()
    {
        $this->middleware(['admin']);
    }
    //
    public function index(Request $request)
    {
        $datadeposits = DB::table('funds')
            ->orderByDesc('id')
            ->paginate(15);
        if (isset($request->confirmid)) {
            $datatransaction = DB::table('funds')
                ->where('transactionId', $request->confirmid)
                ->first();
            $data = DB::table('funds')
                ->where('userId', $datatransaction->userId)
                ->where('status', 'CONFIRM')
                ->first();
            $user = DB::table('users')
                ->where('userId', $datatransaction->userId)
                ->first();
            DB::table('funds')
                ->where('transactionId', $request->confirmid)
                ->update(['status' => 'CONFIRM']);

            if (
                DB::table('users')
                    ->where('referral', $user->referral)
                    ->exists() &&
                $user->referral != 'Admin'
            ) {
                $datauser = DB::table('users')
                    ->where('userId', $user->userId)
                    ->first();
                $sponsorId = $datauser->referral;
                $nameSponsored = $datauser->username;
                $bonusamount = ($datatransaction->amount * 5) / 100;
                $dataSponser = DB::table('users')
                    ->where('referralId', $sponsorId)
                    ->first();
                $sponsor = $dataSponser->username;
                // return dd($dataSponser);

                $sponsorvalidate = DB::table('users')
                    ->where('referralId', $sponsorId)
                    ->first();
                if ($sponsorvalidate != null) {
                    DB::table('bonuses')->insert([
                        'bonusId' => $this->randomDigit(),
                        'sponsor' => $sponsor,
                        'sponsorId' => $sponsorId,
                        'nameSponsered' => $nameSponsored,
                        'amount' => $bonusamount,
                        'status' => 'CONFIRM',
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s'),
                    ]);
                    // email....
                    $datadeposit = DB::table('funds')
                        ->where('transactionId', $request->confirmid)
                        ->first();
                    $details = [
                        'name' => $datadeposit->username,
                        'amount' => $datadeposit->amount,
                        'id' => $datadeposit->transactionId,
                    ];

                    Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                    return back()->with('success', 'Successful');
                } else {
                    // email....
                    $datadeposit = DB::table('funds')
                        ->where('transactionId', $request->confirmid)
                        ->first();
                    $details = [
                        'name' => $datadeposit->username,
                        'amount' => $datadeposit->amount,
                        'id' => $datadeposit->transactionId,
                    ];

                    Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                    return back()->with('success', 'Successful');
                }
            } else {
                // email....
                $datadeposit = DB::table('funds')
                    ->where('transactionId', $request->confirmid)
                    ->first();
                $details = [
                    'name' => $datadeposit->username,
                    'amount' => $datadeposit->amount,
                    'id' => $datadeposit->transactionId,
                ];

                Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                return back()->with('success', 'Successful');
            }

            // email....

            // $details = [
            //     'name' => $datauser->firstname.' '.$datauser->lastname,
            //     'amount' => $datadepo->amount,

            //     'id' => $datadepo->transactionId,
            // ];

            // Mail::to($datauser->email)->send(new EmailFunding($details));

            // return back();
        } elseif (isset($request->unconfirmid)) {
            DB::table('funds')
                ->where('transactionId', $request->unconfirmid)
                ->update(['status' => 'PENDING']);
            return back()->with('toast_success', 'Successful');
        } elseif (isset($request->deleteid)) {
            DB::table('funds')
                ->where('transactionId', $request->deleteid)
                ->delete();
            return back()->with('toast_success', 'Successful');
        } else {
            return view('admin.admindeposit')->with('datadeposits', $datadeposits);
        }
    }
}
