<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;
class LeadController extends Controller
{
    public function addLead(Request $request)
    {
        $lead=new Lead;
        $lead->username=$request->username;
        $lead->phone=$request->phone;
        $lead->email=$request->email;
        $lead->url=$request->url;
        $lead->remak=$request->remark;
        $lead->utm_medium=$request->utm_medium;
        $lead->utm_source=$request->utm_source;
        $lead->lead=$request->lead;
        $lead->save();
        return back();
    }
}
