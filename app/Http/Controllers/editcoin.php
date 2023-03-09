<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class editcoin extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }

    public function index(Request $request)
    {
        $id = $request->id;
        $data = DB::table('coins')->where('coinId', $id)->first();

        return view('admin.editcoin')->with('data', $data);
    }

    public function store(Request $request){
        $data = DB::table('coins')->where('coinId', $request->id)->first();
        if($data == null){
            return back()->with('toast_error', 'Coin Id');                                
        }else{
            DB::table('coins')->where('coinId', $request->id)->update([
                'coinName' => $request->name,
                'coinAddress' => $request->address,
            ]);
            return back()->with('toast_success', 'Successfully Updated!!');                                

        }
    }
}
