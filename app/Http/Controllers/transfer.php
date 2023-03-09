<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\withdraw as ModelsWithdraw;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class transfer extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('user.transfer');
    }
    public function randomDigit(){
        $pass = substr(str_shuffle("c12b001a15f9bd46ef1c6551386c6a2bcda1ab3eae5091fba"), 0, 36);
        return $pass;
    }

    public function store(Request $request){
        if(DB::table('users')->where('username', $request->username)->exists() && 
            $request->username != auth()->user()->username){
            $datauser = DB::table('users')->where('username', $request->username)->first();
            if($request->paymentType == 'Interest'){
                if($request->amount >= 100){
                    $interest =  DB::table('funds')->where('userId', auth()->user()->userId)
                    ->where('status', 'CONFIRM')
                    ->sum('interest');
                    if($interest >= $request->amount){
                        if(DB::table('funds')->where('username', $datauser->username)->exists()){
                            DB::table('transactions')->where('username', $datauser->username)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'paymentMethod' => 'Transfer',
                                'coin' => 'USD',
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            ModelsWithdraw::create([
                                'transactionId' => $this->randomDigit(),
                                'userId'=> auth()->user()->userId,
                                'username' => auth()->user()->username,
                                'email' => auth()->user()->email,
                                'amount' => $request->amount,
                                'paymentType' => 'Interest',
                                'paymentMethod' => 'Transfer',
                                'status' => 'CONFIRM',
                                'wallet' => 'Transfer',
                                'coin' => 'Transfer',
                            ]);
                            $oldamount = DB::table('funds')->where('userId', $datauser->userId)
                            ->where('status', "CONFIRM")->sum('amount');
                            $newamount = $oldamount + $request->amount;
                            $oldinterest = DB::table('funds')->where('userId', auth()->user()->userId)
                            ->where('status', "CONFIRM")->sum('interest');
                            $newinterest = $oldinterest - $request->amount;
                            DB::table('funds')->where('userId', auth()->user()->userId)
                            ->where('status', "CONFIRM")->update([
                                'interest' => $newinterest,
                            ]);

                            if($newamount >= 100 && $newamount < 10000){
                                DB::table('funds')->where('userId',$datauser->userId)->update([
                                    'amount' => $newamount,
                                    'planAmount' => 1.10,
                                    'plan' => 'Level',
                                ]);
                                // transaction
                              
                                // update
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Level',
                                ]);
                                return back()->with('success', 'Transaction Successful !!'); 
            
                            }elseif($newamount >= 10000 && $newamount < 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'planAmount' => 1.22,
                                    'plan' => 'Alpha',
                                    
                                ]);
                                // transaction
                                
                                // update
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Alpha',
                                ]);
                                return back()->with('success', 'Transaction Successful !!');                   
                            }elseif($newamount >= 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'planAmount' => 2,
                                    'plan' => 'Contract',
                                    
                                ]);
                                // transaction
                                
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Contract',
                                ]);
                                return back()->withSuccess('Transaction Successful !!!');
                            }elseif($newamount >= 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'coin' => 'USD',
                                    'plan' => 'Leverage',
                                   
                                ]);
                                
                                // update
                                DB::table('users')->where('userId', auth()->user()->userId)->update([
                                    'plan' => 'Leverage',
                                ]);
                                return back()->with('success', 'Transaction Successful !!'); 
                            }else{
                                return back()->with('errors', 'Oops!! Contact Admin');
                            }
                    }else{
                        DB::table('transactions')->where('username', $datauser->username)->insert([
                            'transactionId' => $this->randomDigit(),
                            'userId' => $datauser->userId,
                            'username' => $datauser->username,
                            'email' => $datauser->email,
                            'amount' => $request->amount,
                            'paymentMethod' => 'Transfer',
                            'coin' => 'USD',
                            'status' => 'CONFIRM',
                            "created_at" =>  date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s'),
                        ]);
                        ModelsWithdraw::create([
                            'transactionId' => $this->randomDigit(),
                            'userId'=> auth()->user()->userId,
                            'username' => auth()->user()->username,
                            'email' => auth()->user()->email,
                            'amount' => $request->amount,
                            'paymentType' => 'Interest',
                            'paymentMethod' => 'Transfer',
                            'status' => 'CONFIRM',
                            'wallet' => 'Transfer',
                            'coin' => 'Transfer',
                        ]);
                        $oldinterest = DB::table('funds')->where('userId', auth()->user()->userId)
                            ->where('status', "CONFIRM")->sum('interest');
                            $newinterest = $oldinterest - $request->amount;
                        DB::table('funds')->where('userId', auth()->user()->userId)
                            ->where('status', "CONFIRM")->update([
                                'interest' => $newinterest,
                            ]);
                        if($request->amount >= 100 && $request->amount < 10000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'interest' => 0,
                                'profit' => 0,
                                'coin' => 'USD',
                                'planAmount' => 1.10,
                                'plan' => 'Level',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            // transaction
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Level',
                            ]);
                            return back()->with('success', 'Transaction Successful !!');  
        
                        }elseif($request->amount >= 10000 && $request->amount < 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'interest' => 0,
                                'profit' => 0,
                                'coin' => 'USD',
                                'planAmount' => 1.22,
                                'plan' => 'Alpha',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Alpha',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 
                 
                        }elseif($request->amount >= 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'coin' => 'USD',
                                'interest' => 0,
                                'profit' => 0,
                                'planAmount' => 2,
                                'plan' => 'Contract',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                           
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Contract',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 

                        }elseif($request->amount >= 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'coin' => 'USD',
                                'interest' => 0,
                                'profit' => 0,
                                'planAmount' => 2,
                                'plan' => 'Leverage',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                           
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Leverage',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 
                        }else{
                            return back()->with('errors', 'Oops!! Contact Admin');
                        }
                    }
                    }else{
                        return back()->with('errors', 'Insufficient fund');
                    }
                }else{
                    return back()->with('errors', 'Invalid Amount');
                }
            }else{
                if($request->amount >= 1000){
                    $databonus = DB::table('bonuses')
                    ->where('sponsorId', auth()->user()->referralId)
                    ->where('amount', '>', 0)
                    ->sum('amount');
                    $withbon = DB::table('withdraws')
                    ->where('userId', auth()->user()->userId)
                    ->where('status', 'CONFIRM')
                    ->where('paymentType', 'Bonus')
                    ->sum('amount'); 
                    $newbon =  $databonus - $withbon;
                    
                    if($newbon >= $request->amount){
                        if(DB::table('funds')->where('username', $datauser->username)->exists()){
                            DB::table('transactions')->where('username', $datauser->username)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'paymentMethod' => 'Transfer',
                                'coin' => 'USD',
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            ModelsWithdraw::create([
                                'transactionId' => $this->randomDigit(),
                                'userId'=> auth()->user()->userId,
                                'username' => auth()->user()->username,
                                'email' => auth()->user()->email,
                                'amount' => $request->amount,
                                'paymentType' => 'Bonus',
                                'paymentMethod' => 'Transfer',
                                'status' => 'CONFIRM',
                                'wallet' => 'Transfer',
                                'coin' => 'Transfer',
                            ]);
                            $oldamount = DB::table('funds')->where('userId', $datauser->userId)
                            ->where('status', "CONFIRM")->sum('amount');
                            $newamount = $oldamount + $request->amount;
                            if($newamount >= 100 && $newamount < 10000){
                                DB::table('funds')->where('userId',$datauser->userId)->update([
                                    'amount' => $newamount,
                                    'planAmount' => 1.10,
                                    'plan' => 'Level',
                                ]);
                                // transaction
                              
                                // update
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Level',
                                ]);
                                return back()->with('success', 'Transaction Successful !!'); 
            
                            }elseif($newamount >= 10000 && $newamount < 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'planAmount' => 1.22,
                                    'plan' => 'Alpha',
                                    
                                ]);
                                // transaction
                                
                                // update
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Alpha',
                                ]);
                                return back()->with('success', 'Transaction Successful !!');                   
                            }elseif($newamount >= 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'planAmount' => 2,
                                    'plan' => 'Contract',
                                    
                                ]);
                                // transaction
                                
                                DB::table('users')->where('userId', $datauser->userId)->update([
                                    'plan' => 'Contract',
                                ]);
                                return back()->withSuccess('Transaction Successful !!!');
                            }elseif($newamount >= 50000){
                                DB::table('funds')->where('userId', $datauser->userId)->update([
                                    
                                    'amount' => $newamount,
                                    'coin' => 'USD',
                                    'plan' => 'Leverage',
                                   
                                ]);
                                
                                // update
                                DB::table('users')->where('userId', auth()->user()->userId)->update([
                                    'plan' => 'Leverage',
                                ]);
                                return back()->with('success', 'Transaction Successful !!'); 
                            }else{
                                return back()->with('errors', 'Oops!! Contact Admin');
                            }
                    }else{
                        DB::table('transactions')->where('username', $datauser->username)->insert([
                            'transactionId' => $this->randomDigit(),
                            'userId' => $datauser->userId,
                            'username' => $datauser->username,
                            'email' => $datauser->email,
                            'amount' => $request->amount,
                            'paymentMethod' => 'Transfer',
                            'coin' => 'USD',
                            'status' => 'CONFIRM',
                            "created_at" =>  date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s'),
                        ]);
                        ModelsWithdraw::create([
                            'transactionId' => $this->randomDigit(),
                            'userId'=> auth()->user()->userId,
                            'username' => auth()->user()->username,
                            'email' => auth()->user()->email,
                            'amount' => $request->amount,
                            'paymentType' => 'Bonus',
                            'paymentMethod' => 'Transfer',
                            'status' => 'CONFIRM',
                            'wallet' => 'Transfer',
                            'coin' => 'Transfer',
                        ]);
                        
                        
                        if($request->amount >= 100 && $request->amount < 10000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'interest' => 0,
                                'profit' => 0,
                                'coin' => 'USD',
                                'planAmount' => 1.10,
                                'plan' => 'Level',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            // transaction
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Level',
                            ]);
                            return back()->with('success', 'Transaction Successful !!');  
        
                        }elseif($request->amount >= 10000 && $request->amount < 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'interest' => 0,
                                'profit' => 0,
                                'coin' => 'USD',
                                'planAmount' => 1.22,
                                'plan' => 'Alpha',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                            
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Alpha',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 
                 
                        }elseif($request->amount >= 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'coin' => 'USD',
                                'interest' => 0,
                                'profit' => 0,
                                'planAmount' => 2,
                                'plan' => 'Contract',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                           
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Contract',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 

                        }elseif($request->amount >= 50000){
                            DB::table('funds')->where('userId', $datauser->userId)->insert([
                                'transactionId' => $this->randomDigit(),
                                'userId' => $datauser->userId,
                                'username' => $datauser->username,
                                'email' => $datauser->email,
                                'amount' => $request->amount,
                                'coin' => 'USD',
                                'interest' => 0,
                                'profit' => 0,
                                'planAmount' => 2,
                                'plan' => 'Leverage',
                                'dayCounter' => 0,
                                'status' => 'CONFIRM',
                                "created_at" =>  date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s'),
                            ]);
                           
                            // update
                            DB::table('users')->where('userId', $datauser->userId)->update([
                                'plan' => 'Leverage',
                            ]);
                            return back()->with('success', 'Transaction Successful !!'); 
                        }else{
                            return back()->with('errors', 'Oops!! Contact Admin');
                        }
                    }
                    }else{
                        return back()->with('errors', 'Insufficient fund for Transfer');
                    }
                }else{
                    return back()->with('errors', 'Insufficient fund for Transfer');

                }
            }
            // check if money is on the bonus wallet
        } else{
            return back()->with('errors', 'Oops!!! Invalid Username');

        }              
    }
}
