<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class editbonus extends Controller
{
    //
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $id = $request->id;
        $data = DB::table('bonuses')->where('bonusId', $id)->first();

        return view('admin.editbonus')->with('data', $data);
    }

    public function store(Request $request){
        $data = DB::table('bonuses')->where('bonusId', $request->id)->first();
        if($data == null){
            return back()->with('toast_error', 'Transaction Id');                                
        }else{
            DB::table('bonuses')->where('bonusId', $request->id)->update([
                'amount' => $request->amount,
                'status' => $request->status,
                'created_at' => $request->date,

            ]);
            return back()->with('toast_success', 'Successfully Updated!!');                                

        }

    }
}
