<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Mail\EmailDeposit;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class admintransaction extends Controller
{
    //
    public function __construct()
    {
        $this->middleware(['admin']);
    }
    //
    public function randomDigit()
    {
        $pass = substr(str_shuffle("0123456789abcDEFGHIJnostXYZ"), 0, 15);
        return $pass;
    }

    public function index(Request $request)
    {
        $datadeposits = DB::table('transactions')
            ->orderByDesc('id')
            ->paginate(15);
        if (isset($request->confirmid)) {
            DB::table('transactions')
                ->where('transactionId', $request->confirmid)
                ->update([
                    'status' => 'CONFIRM',
                ]);
            $datatransaction = DB::table('transactions')
                ->where('transactionId', $request->confirmid)
                ->first();
            $data = DB::table('funds')
                ->where('userId', $datatransaction->userId)
                ->where('status', 'CONFIRM')
                ->first();
            $user = DB::table('users')
                ->where('userId', $datatransaction->userId)
                ->first();
            $recentamount = DB::table('transactions')
                ->where('transactionId', $request->confirmid)
                ->sum('amount');
            $oldamount = DB::table('funds')
                ->where('userId', $datatransaction->userId)
                ->sum('amount');
            $newamount = $recentamount + $oldamount;

            if ($data != null) {
                // return dd($user);
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
                        if ($newamount >= 100 && $newamount < 10000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Level')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Level',
                                    'planAmount' => $planAmount->packageAmount,
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
                                ->where('transactionId', $request->confirmid)
                                ->first();
                            $details = [
                                'name' => $datadeposit->username,
                                'amount' => $datadeposit->amount,
                                'id' => $datadeposit->transactionId,
                            ];

                            Mail::to($datadeposit->email)->send(new EmailDeposit($details));

                            return back()->with('success', 'Successful');
                        } elseif ($newamount >= 10000 && $newamount < 50000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Alpha')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Alpha',
                                    'planAmount' => $planAmount->packageAmount,
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
                                ->where('transactionId', $request->confirmid)
                                ->first();
                            $details = [
                                'name' => $datadeposit->username,
                                'amount' => $datadeposit->amount,
                                'id' => $datadeposit->transactionId,
                            ];

                            Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                            return back()->with('success', 'Successful');
                        } elseif ($newamount >= 50000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Contract')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Contract',
                                    'planAmount' => $planAmount->packageAmount,
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
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
                            return back()->with('errors', 'Contact Developer');
                        }
                    } else {
                        if ($newamount >= 100 && $newamount < 10000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Level')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Level',
                                    'planAmount' => $planAmount->packageAmount,
                                    'status' => 'CONFIRM',
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
                                ->where('transactionId', $request->confirmid)
                                ->first();
                            $details = [
                                'name' => $datadeposit->username,
                                'amount' => $datadeposit->amount,
                                'id' => $datadeposit->transactionId,
                            ];

                            Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                            return back()->with('success', 'Successful');
                        } elseif ($newamount >= 10000 && $newamount < 50000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Alpha')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Alpha',
                                    'status' => 'CONFIRM',
                                    'planAmount' => $planAmount->packageAmount,
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
                                ->where('transactionId', $request->confirmid)
                                ->first();
                            $details = [
                                'name' => $datadeposit->username,
                                'amount' => $datadeposit->amount,
                                'id' => $datadeposit->transactionId,
                            ];

                            Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                            return back()->with('success', 'Successful');
                        } elseif ($newamount >= 50000) {
                            $planAmount = DB::table('packages')
                                ->where('packageName', 'Contract')
                                ->first();
                            DB::table('funds')
                                ->where('userId', $datatransaction->userId)
                                ->update([
                                    'amount' => $newamount,
                                    'plan' => 'Contract',
                                    'status' => 'CONFIRM',
                                    'planAmount' => $planAmount->packageAmount,
                                ]);
                            // email....
                            $datadeposit = DB::table('transactions')
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
                            return back()->with('errors', 'Contact Developer');
                        }
                    }
                } else {
                    if ($newamount >= 100 && $newamount < 10000) {
                        $planAmount = DB::table('packages')
                            ->where('packageName', 'Level')
                            ->first();
                        DB::table('funds')
                            ->where('userId', $datatransaction->userId)
                            ->update([
                                'amount' => $newamount,
                                'plan' => 'Level',
                                'planAmount' => $planAmount->packageAmount,
                                'status' => 'CONFIRM',
                            ]);
                        // email....
                        $datadeposit = DB::table('transactions')
                            ->where('transactionId', $request->confirmid)
                            ->first();
                        $details = [
                            'name' => $datadeposit->username,
                            'amount' => $datadeposit->amount,
                            'id' => $datadeposit->transactionId,
                        ];

                        Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                        return back()->with('success', 'Successful');
                    } elseif ($newamount >= 10000 && $newamount < 50000) {
                        $planAmount = DB::table('packages')
                            ->where('packageName', 'Alpha')
                            ->first();
                        DB::table('funds')
                            ->where('userId', $datatransaction->userId)
                            ->update([
                                'amount' => $newamount,
                                'plan' => 'Alpha',
                                'planAmount' => $planAmount->packageAmount,
                                'status' => 'CONFIRM',
                            ]);
                        // email....
                        $datadeposit = DB::table('transactions')
                            ->where('transactionId', $request->confirmid)
                            ->first();
                        $details = [
                            'name' => $datadeposit->username,
                            'amount' => $datadeposit->amount,
                            'id' => $datadeposit->transactionId,
                        ];

                        Mail::to($datadeposit->email)->send(new EmailDeposit($details));
                        return back()->with('success', 'Successful');
                    } elseif ($newamount >= 50000) {
                        $planAmount = DB::table('packages')
                            ->where('packageName', 'Contract')
                            ->first();
                        DB::table('funds')
                            ->where('userId', $datatransaction->userId)
                            ->update([
                                'amount' => $newamount,
                                'plan' => 'Contract',
                                'planAmount' => $planAmount->packageAmount,
                                'status' => 'CONFIRM',
                            ]);
                        // email....
                        $datadeposit = DB::table('transactions')
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
                        return back()->with('errors', 'Contact Developer');
                    }
                }
            } else {
                if (
                    DB::table('users')
                        ->where('referral', $user->referral)
                        ->exists() &&
                    $user->referral != 'Admin'
                ) {
                    $datauser = DB::table('users')
                        ->where('userId', $user->userId)
                        ->first();

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
                        DB::table('funds')
                            ->where('userId', $datatransaction->userId)
                            ->update([
                                'status' => 'CONFIRM',
                            ]);
                        // email....
                        $datadeposit = DB::table('transactions')
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
                        DB::table('funds')
                            ->where('userId', $datatransaction->userId)
                            ->update([
                                'status' => 'CONFIRM',
                            ]);
                        // email....
                        $datadeposit = DB::table('transactions')
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
                    DB::table('funds')
                        ->where('userId', $datatransaction->userId)
                        ->update([
                            'status' => 'CONFIRM',
                        ]);
                    // email....
                    $datadeposit = DB::table('transactions')
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
            DB::table('transactions')
                ->where('transactionId', $request->unconfirmid)
                ->update(['status' => 'PENDING']);
            return back()->with('toast_success', 'Successful');
        } elseif (isset($request->deleteid)) {
            DB::table('transactions')
                ->where('transactionId', $request->deleteid)
                ->delete();
            return back()->with('toast_success', 'Successful');
        } else {
            return view('admin.admintransaction')->with('datadeposits', $datadeposits);
        }
    }
}
