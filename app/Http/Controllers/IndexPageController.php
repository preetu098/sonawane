<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexPageController extends Controller
{
    public function index()
    {
        $data=DB::select("select * from construction");
        return view('client/index',['all_record'=>$data]); 
    }
}
