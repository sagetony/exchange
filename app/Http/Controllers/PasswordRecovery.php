<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\EmailPasswordRecovery;

class PasswordRecovery extends Controller
{
    //
    public function index(){
        return view('auth.passwordrecovery');
    }

    public function store(Request $request){
        $data = DB::table('users')->where('email', $request->email)->first();
        if($data != null){

                // email......
                $dat = DB::table('users')->where('username', $request->email)->first();
                    
                $details = [
                    'name' => $data->username,
                    'id' => $data->userId,
                ];
                Mail::to($request->email)->send(new EmailPasswordRecovery($details));
                // return 'email';
                return back()->with('success', 'Kindly check email for Password Reset');    

            // return redirect()->route('setpassword', ['id' => $data->userId]);
        }else{
            return back()->with('errors', 'Oops!! Email not Registered');    

        }
    }
}
