<?php

namespace App\Http\Controllers;

use App\Models\Admin as ModelsAdmin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class adminregister extends Controller
{
    //
    public function index(){
        return view('admin.register');
    }

    public function rand(){
        return substr(rand(0, 10000000).time(), 0, 15);
    }
    public function store(Request $request){
        
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => ['required', 'max:30', 'min:10', 'confirmed'],
        ]);
        if ($validator->fails()){
            return back()->with('errors', $validator->messages()->all()[0])->withInput();
        }else{
            $admin = ModelsAdmin::create([
                    'adminId'=> $this->rand(),
                    'email'=> $request->email,
                    'password'=> Hash::make($request->password),
                    'role' => 'Superadmin',
                    'username'=> '',
                ]);
                    }
                    return redirect()->route('adminlogin')->withSuccess('Registration Successful');
               

        }
}
