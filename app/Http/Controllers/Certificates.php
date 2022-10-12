<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crtificate;
use DB;

class Certificates extends Controller
{
    public function search(Request $request)
    {
        $certificates=DB::table('crtificates')->get();
        $result=crtificate::where('idCer','LIKE','%'.$request->idCer.'%')->first();  
        return view('details')->with(['result'=>$result]);
        
    }
    
    public function store(Request $request)
    {
        
        DB::table('crtificates')->insert(['idCer'=>$request->idCer,'name'=>$request->name]);
        return view('index');
    }
}
