<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Mail\EmailWithdraw;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class adminwithdraw extends Controller
{
     //
     public function __construct()
     {
             $this->middleware(['admin']);
     }
     //
     public function index(Request $request){
         $datadeposits = DB::table('withdraws')->orderByDesc('id')
         ->paginate(15);
         if(isset($request->confirmid)){
             DB::table('withdraws')
             ->where('transactionId', $request->confirmid)
             ->update(['status' => 'CONFIRM']);
 
             // email....
            $datawithdraw = DB::table('withdraws')->where('transactionId', $request->confirmid)->first();
             $details = [
                 'name' => $datawithdraw->username,
                 'amount' => $datawithdraw->amount,
                 'id' => $datawithdraw->transactionId,
                 'wallet' => $datawithdraw->wallet,
                 'coin' => $datawithdraw->coin,
             ]; 
 
             Mail::to($datawithdraw->email)->send(new EmailWithdraw($details));

             return back()->with('toast_success', 'Successful');

             // return back();
         
         }elseif(isset($request->unconfirmid)){
            // return dd($request->unconfirmid);
                 DB::table('withdraws')
                     ->where('transactionId', $request->unconfirmid)
                     ->update(['status' => 'PENDING']);
                     return back()->with('toast_success', 'Successful');
 
             }elseif(isset($request->deleteid)){
                 DB::table('withdraws')
                 ->where('transactionId', $request->deleteid)
                 ->delete();
                 return back()->with('toast_success', 'Successful');
 
             }else{
                 return view('admin.adminwithdraw')->with('datadeposits', $datadeposits);
 
         }
     }
}
