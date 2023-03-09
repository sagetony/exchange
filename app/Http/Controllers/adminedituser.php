<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminedituser extends Controller
{
    //
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $id = $request->id;
        $datadeposits =  DB::table('funds')->where('userId', $id)->get();
        $datatrans =  DB::table('transactions')->where('userId', $id)->get();
        $userdata = DB::table('users')->where('userId', $id)->first();
        $walletamount = DB::table('funds')->where('userId', $id)->where('status', 'CONFIRM')->sum('amount');
        $bonusamount = DB::table('bonuses')->where('status', 'CONFIRM')->where('sponsorId', $userdata->referralId)->sum('amount');
        $profit = DB::table('funds')->where('userId', $id)->where('status', 'CONFIRM')->sum('profit');
        $withdraw = DB::table('withdraws')->where('status', 'CONFIRM')->where('userId', $id)->sum('amount');
        $withdrawmain = DB::table('withdraws')->where('status', 'CONFIRM')->where('userId', $id)->where('paymentType', '!=', 'Interest')->sum('amount');
        $interest = DB::table('funds')->where('userId', $id)->where('status', 'CONFIRM')->sum('interest');
        $withdrawcapital = DB::table('withdraws')->where('status', 'CONFIRM')->where('userId', $id)->where('paymentType', 'Capital')->sum('amount');
        $withdrawbonus = DB::table('withdraws')->where('status', 'CONFIRM')->where('userId', $id)->where('paymentType', 'Bonus')->sum('amount');    
      
        return view('admin.adminedituser')->with('withdrawmain', $withdrawmain)
        ->with('withdraw', $withdraw)->with('profit', $profit)->with('interest', $interest)
        ->with('withdrawcapital', $withdrawcapital)->with('walletamount', $walletamount)
        ->with('bonusamount', $bonusamount)->with('withdrawbonus', $withdrawbonus)->with('userdata', $userdata)->with('datadeposits', $datadeposits)->with('datatrans', $datatrans);
    }

    public function store(Request $request){
        $datauser = DB::table('users')->where('userId', $request->id)->first();

       if($datauser == null){
        return back()->with('toast_error', 'Invalid Id');                                
       }else{
            DB::table('users')->where('userId', $request->id)
                    ->update([
                    'firstName' => $request->firstname,
                    'lastName' => $request->lastname,
                    'created_at' =>$request->date,
                    'emailVerified' => $request->emailVer,
                    'referral' => $request->referral,
                    'plan' => $request->plan,
        ]);
        return back()->with('toast_success', 'Successfull !!');
        
              
       } 
    }
}
