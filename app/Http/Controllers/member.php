<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class member extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data = DB::table('users')
            ->where('referral', auth()->user()->referralId)
            ->get();
        $databonus = DB::table('bonuses')
            ->where('sponsorId', auth()->user()->referralId)
            ->where('status', 'CONFIRM')
            ->orderByDesc('id')
            ->get();
        return view('user.members')
            ->with('data', $data)
            ->with('databonus', $databonus);
    }
}
