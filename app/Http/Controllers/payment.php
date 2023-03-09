<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class payment extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request){
        $id = $request->id;
        $data = DB::table('transactions')
                ->where('transactionId', $id) 
                ->first();
        if($data == null){
            return redirect()->route('fund')->with('errors', 'Oops!! Invalid Transaction');
        }else{
            $coindata = DB::table('coins')->where('coinName', $data->coin)->first();
            return view('user.payment')->with('coindata', $coindata)->with('data', $data);
        }
    }
}
