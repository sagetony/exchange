<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class adminuser extends Controller
{
    //
    public function __construct()
    {
            $this->middleware(['admin']);
    }
    public function index(Request $request){
        $datausers = DB::table('users')->orderByDesc('id')
                ->paginate(10);
                if(isset($request->lockid)){
                    DB::table('users')
                    ->where('userId', $request->lockid)
                    ->update(['status' => 'BLOCK']);
                    return back();
                
                }elseif(isset($request->unlockid)){
                        DB::table('users')
                            ->where('userId', $request->unlockid)
                            ->update(['status' => 'ACTIVE']);
                            return back();
        
                    }elseif(isset($request->deleteid)){
                        DB::table('users')
                        ->where('userId', $request->deleteid)
                        ->delete();
                        return back();
        
                    }else{
                        return view('admin.adminuser')->with('datausers', $datausers);

                }
    }
}
