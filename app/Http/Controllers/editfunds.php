<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class editfunds extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $id = $request->id;
        $data = DB::table('funds')->where('transactionId', $id)->first();

        return view('admin.editfunds')->with('data', $data);
    }

    public function store(Request $request){
        $data = DB::table('funds')->where('transactionId', $request->id)->first();
        if($data == null){
            return back()->with('toast_error', 'Transaction Id');                                
        }else{
            DB::table('funds')->where('transactionId', $request->id)->update([
                'amount' => $request->amount,
                'interest' => $request->interest,
                'profit' => $request->profit,
                'plan' => $request->plan,
                'planAmount' => $request->planAmount,
                'dayCounter' => $request->dayCounter,
                'created_at' => $request->date,

            ]);
            return back()->with('toast_success', 'Successfully Updated!!');                                

        }

    }
}
