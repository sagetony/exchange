<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class security extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('user.security');
    }

    public function store(Request $request)
    {
        DB::table('users')
            ->where('userId', auth()->user()->userId)
            ->update([
                "passwordhint" => $request->hint,
            ]);
        return back()->withSuccess(' Successful');
    }
}
