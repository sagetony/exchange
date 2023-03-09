<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class editwithdraw extends Controller
{
    //
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $id = $request->id;
        $data = DB::table('withdraws')->where('transactionId', $id)->first();

        return view('admin.editwithdraw')->with('data', $data);
    }

    public function store(Request $request){
        $data = DB::table('withdraws')->where('transactionId', $request->id)->first();
        if($data == null){
            return back()->with('toast_error', 'Transaction Id');                                
        }else{
            DB::table('withdraws')->where('transactionId', $request->id)->update([
                'amount' => $request->amount,
                'status' => $request->status,
                'created_at' => $request->date,

            ]);
            return back()->with('toast_success', 'Successfully Updated!!');                                

        }

    }
}
