<?php

namespace App\Http\Controllers;

use App\Rules\MatchOldPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class adminprofile extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(){
        return view('admin.profile');
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'currentPassword' => ['required'],
            'password' => ['required', 'confirmed'],
            // 'new_confirm_password' => ['same:new_password'],
        ]);
      if($validator->fails()){
        return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

        // return back()->with('toast_error', $validator->messages()->all()[0])->withInput();

      }
    $currentPassword = Auth::guard('admin')->user()->password; 
    $password = Hash::make($request->password);

    $data = DB::table('admins')->where('id', Auth::guard('admin')->user()->id)
                    ->update(['password' => $password]);

    
        Auth::logoutOtherDevices($password);

        return redirect()->route('adminlogin')->with('toast_success', 'Password has been updated');
    }
}
