<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
class adminlogin extends Controller
{
    //
    public function index(){
        return view('admin.login');
    }
    public function store(Request $request){
        $validator = Validator::make($request->all(),[
                'email'=> 'required',
                'password'=> 'required',
        ]);
        if($validator->fails()){
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }else{
            $adminauth = $request->only('email', 'password');
           
            if(Auth::guard('admin')->attempt($adminauth)){
                return redirect()->route('admin');
            }else{
                return back()->with('errors', 'Invalid login details');
            }
        }
    }

}
