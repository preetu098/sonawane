<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsletterModel;
use DB;

class NewsletterController extends Controller
{
    public function addNewsLetter(Request $request)
    {
        $request->validate([
            'email' => 'required'
        ]);
        
        $n=new NewsletterModel;
        $n->email=$request->email;
        $n->save();
        return back()->with('success','Newsletter submitted succesfully');
    }

    public function getNewsletters()
    {
            $data=DB::select("select * from newsletters");
            return view('admin/newsletter',['all_record'=>$data]);
    }
}
