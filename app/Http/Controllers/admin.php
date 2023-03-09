<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class admin extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }

    public function index()
        {
                $datauser = DB::table('users')
                ->count('id');
                $dataamount = DB::table('funds')
                ->count('id');
                $datadeposit = DB::table('funds')
                        ->where('status', 'CONFIRM')
                        ->sum('amount');
                $datarwith = DB::table('withdraws')
                        ->where('paymentType', 'Bonus')
                        ->sum('amount');
                $datacwith = DB::table('withdraws')
                        ->where('paymentType', 'Capital')
                        ->sum('amount');

                $datawithdraw = DB::table('withdraws')
                ->where('status', 'CONFIRM')
                        ->sum('amount');

                $datareferral = DB::table('bonuses')
                ->where('status', 'CONFIRM')
                        ->sum('amount');

                

                return view('admin.dashboard')->with('datadeposit', $datadeposit)->with('datareferral', $datareferral)
                ->with('datawithdraw', $datawithdraw)->with('datauser', $datauser)->with('dataamount', $dataamount)->with('datacwith', $datacwith)
                ->with('datarwith', $datarwith);
        }
}
