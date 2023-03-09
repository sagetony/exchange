<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class adminbonus extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    //
    public function index(Request $request){
        $datadeposits = DB::table('bonuses')->orderByDesc('id')
        ->paginate(15);
        if(isset($request->confirmid)){
            DB::table('bonuses')
            ->where('bonusId', $request->confirmid)
            ->update(['status' => 'CONFIRM']);
            return back()->with('toast_success', 'Successful');

            // email....

            // $details = [
            //     'name' => $datauser->firstname.' '.$datauser->lastname,
            //     'amount' => $datadepo->amount,
                
            //     'id' => $datadepo->bonusId,
            // ]; 

            // Mail::to($datauser->email)->send(new EmailFunding($details));

            // return back();
        
        }elseif(isset($request->unconfirmid)){
                DB::table('bonuses')
                    ->where('bonusId', $request->unconfirmid)
                    ->update(['status' => 'PENDING']);
                    return back()->with('toast_success', 'Successful');

            }elseif(isset($request->deleteid)){
                DB::table('bonuses')
                ->where('bonusId', $request->deleteid)
                ->delete();
                return back()->with('toast_success', 'Successful');

            }else{
                return view('admin.adminbonus')->with('datadeposits', $datadeposits);

        }
    }
}
