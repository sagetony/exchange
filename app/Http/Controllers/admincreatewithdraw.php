<?php

namespace App\Http\Controllers;
use App\Models\withdraw as ModelsWithdraw;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class admincreatewithdraw extends Controller
{
    //
    public function __construct()
            {
                $this->middleware(['admin']);
            }
    public function index(){
        return view('admin.admincreatewithdraw');
    }
    public function randomDigit(){
        $pass = substr(str_shuffle("0123456789abcnost"), 0, 12);
        return $pass;
    }
    
    public function store(Request $request){
       
       $datauser = DB::table('users')->where('username', $request->username)->first();

       if($datauser == null){
        return back()->with('toast_error', 'Invalid Username');                                
       }else{
        ModelsWithdraw::create([
            'transactionId' => $this->randomDigit(),
            'userId'=> $datauser->userId,
            'username' => $datauser->username,
            'email' => $datauser->email,
            'amount' => $request->amount,
            'paymentType' => $request->paymentType,
            'status' => 'CONFIRM',
            'coin' => $request->coin,
            'wallet' => $request->wallet,
            'paymentMethod' => 'Withdraw',                    
        ]);
        DB::table('transactions')->where('userId', auth()->user()->userId)->insert([
            'transactionId' => $this->randomDigit(),
            'userId' => $datauser->userId,
            'username' => $datauser->username,
            'email' => $datauser->email,
            'amount' => $request->amount,
            'paymentMethod' => 'Withdraw',
            'coin' => $request->coin,
            'status' => 'CONFIRM',
            "created_at" =>  date('Y-m-d H:i:s'),
            "updated_at" => date('Y-m-d H:i:s'),
        ]);    
        return back()->with('success', 'Withdrawal has been created');        
              
       } 
    }
}
