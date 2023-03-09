<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class displaycoin extends Controller
{
    //
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $datas = DB::table('coins')->get();

        if(isset($request->deleteid)){
            DB::table('coins')
            ->where('coinId', $request->deleteid)
            ->delete();
            return back();

        }else{
        return view('admin.displaycoin')->with('datas', $datas);
        }
    }

   
}
