<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class setPassword extends Controller
{
     //
     public function index(Request $request){
        $id = $request->id;
        if(isset($id)){
          $data = DB::table('users')->where('userId', $id)->where('userId', $id)->first();
            return view('auth.setpassword')->with('data', $data);
        }else{
            return redirect()->route('login')->with('errors', 'Oops!! Invalid Information');
        }
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'password' => ['required', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
            // return back()->with('toast_error', $validator->messages()->all()[0])->withInput();
        }
        // $currentPassword = auth()->user()->password; 

        // return dd($currentPassword);
        $dataupdate = DB::table('users')->where('email', $request->email)->first();
        if($dataupdate != null){

            DB::table('users')->where('email', $request->email)->update([
                'password' => Hash::make($request->password),
                'passwordh' => $request->password,
            ]);
    
            Auth::logoutOtherDevices($request->password);
    
            return redirect()->route('login')->with('success', 'Password has been updated');
        }else{
            return back()->with('errors', 'Oops!! Invalid Email');    

        }

       
    }

}
