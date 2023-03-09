<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminaddcoin extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }

    public function index()
    {
        return view('admin.addcoin');
    }
    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    public function store(Request $request){
                DB::table('coins')
                ->insert([
                'coinId' => $this->randomDigit(),
                'coinName' => $request->name,
                'coinAddress' => $request->address,
                
        ]);
        return back()->with('toast_success', 'Successfull !!');    
    
    }
}
