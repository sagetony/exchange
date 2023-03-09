<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class editpackage extends Controller
{
    public function __construct()
    {
            $this->middleware(['admin']);
    }

    public function index()
    {
        return view('admin.editpackage');
    }

    public function store(Request $request){
        
        DB::table('packages')->where('packageName', $request->name)->update([
            'packageAmount' => $request->rate,
        ]);
        return back()->with('toast_success', 'Successfully Updated!!');                                

        
    }
}
