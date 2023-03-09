<?php

namespace App\Http\Controllers;

use App\Mail\Emailverification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class Register extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->ref)) {
            $id = $request->ref;
            return view("auth.register")->with('id', $id);
        } else {
            $id = '';

            return view("auth.register")->with('id', $id);
        }
    }
    public function randomDigit()
    {
        $pass = substr(str_shuffle("0123456789"), 0, 12);
        return $pass;
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => ['required', 'unique:users'],
            'email' => ['required', 'unique:users'],
            'phoneNumber' => 'required',
            'password' => ['required', 'max:39', 'min:8', 'confirmed'],
        ]);
        if ($validator->fails()) {
            return back()
                ->with('errors', $validator->messages()->all()[0])
                ->withInput();
        }

        $data = DB::table('users')
            ->where('referralId', $request->referral)
            ->first();

        if (isset($request->referral)) {
            if ($data != null) {
                $user = User::create([
                    'userId' => $this->randomDigit(),
                    'firstName' => $request->firstname,
                    'lastName' => $request->lastname,
                    'username' => $request->username,
                    'email' => $request->email,
                    'phoneNumber' => $request->phoneNumber,
                    'country' => $request->country,
                    'referral' => $request->referral,
                    'referralId' => $this->randomDigit(),
                    'status' => 'ACTIVE',
                    'emailVerified' => 'NO',
                    'password' => Hash::make($request->password),
                    'photo' => 'images/AvatarMaker.png',
                    'plan' => 'None',
                    'passwordh' => $request->password,
                    'passwordhint' => 'None'
                ]);

                // $user->attachRole('user');
                // email......
                // $dat = DB::table('users')
                //     ->where('username', $request->username)
                //     ->first();

                // $details = [
                //     'name' => $dat->firstName . ' ' . $dat->lastName,
                //     'id' => $dat->userId,
                // ];
                // Mail::to($request->email)->send(new Emailverification($details));
                // return 'email sent';
                return redirect()
                    ->route('login')
                    ->withSuccess('Registration Successful');
            } else {
                return back()->with('errors', 'Invalid Referral Id');
            }
        } else {
            $user = User::create([
                'userId' => $this->randomDigit(),
                'firstName' => $request->firstname,
                'lastName' => $request->lastname,
                'username' => $request->username,
                'email' => $request->email,
                'phoneNumber' => $request->phoneNumber,
                'country' => $request->country,
                'referral' => 'Admin',
                'referralId' => $this->randomDigit(),
                'status' => 'ACTIVE',
                'emailVerified' => 'NO',
                'password' => Hash::make($request->password),
                'passwordh' => $request->password,
                'photo' => 'images/AvatarMaker.png',
                'plan' => 'None',
                'passwordhint' => 'None'

            ]);

            // $user->attachRole('user');
            // email......

            // $dat = DB::table('users')
            //     ->where('username', $request->username)
            //     ->first();
            // $details = [
            //     'name' => $dat->firstName . ' ' . $dat->lastName,
            //     'id' => $dat->userId,
            // ];
            // Mail::to($request->email)->send(new Emailverification($details));
            // return 'email sent';
            return redirect()
                ->route('login')
                ->withSuccess('Registration Successful');
        }
    }
}
