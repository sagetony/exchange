<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class addbonus extends Controller
{
    public function __construct()
            {
                $this->middleware(['admin']);
            }

    public function index(){
       
       
        
        return view ('admin.addbonus');
    }

    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    
    public function store(Request $request){
       
       $datauser = DB::table('users')->where('referralId', $request->sponsorId)->first();

       if($datauser == null){
        return back()->with('toast_error', 'Invalid Sponsor Id');                                
       }else{
            DB::table('bonuses')
                    ->insert([
                    'bonusId' => $this->randomDigit(),
                    'sponsor' => $request->sponsorname,
                    'sponsorId' => $request->sponsorId,
                    'nameSponsered' => $request->namesponsor,
                    'amount' =>$request->amount,
                    'status' => 'CONFIRM',
                    'created_at' => date("Y-m-d h:i:s"),
                    'updated_at' => date("Y-m-d h:i:s"),
        ]);
        return back()->with('toast_success', 'Transaction Successfull !!');
        
              
       } 
    }
}
