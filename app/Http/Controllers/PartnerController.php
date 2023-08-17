<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PartnerModel;
use DB;


class PartnerController extends Controller
{
    public function addPartner(Request $request)
    {
       
            $p=new PartnerModel;
            $p->name=$request->name;
            $p->email=$request->email;
            $p->phone=$request->phone;
            $p->name_maherera=$request->name_maherera;
            $p->rera_ava=$request->rera_ava;
            $p->pan_number=$request->pan_number;
            $p->cp_firm_type=$request->cp_firm_type;
            $p->cp_type=$request->cp_type;
            $p->save();
            return back()->with('success','Added succesfully');
        
    }

    public function getPartner()
    {
        $data=DB::select("select * from partner");
        return view('admin/partnerRecord',['data'=>$data]);
    }
    public function deletepartner(Request $request)
    {
        $id=$request->id;
        DB::delete("delete from partner where $id");
        return back()->with('success','Deleted succesfully');
    }
}
