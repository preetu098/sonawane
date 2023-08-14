<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\ReferalModel;
use App\Models\CareerModel;
use Illuminate\Support\Facades\Validator;
use DB;

class ContactFormController extends Controller
{
    public function addContact(Request $request)
    {
            $contact=new ContactModel;
            $contact->name=$request->name;
            $contact->email=$request->email;
            $contact->subject=$request->subject;
            $contact->phone=$request->phone;
            $contact->message=$request->message;
            $contact->save();
            return back()->with('success','Contact Submitted Succesfully');

    }
    public function referalContactForm(Request $request)
    {
            $referal=new ReferalModel;
            $referal->name=$request->name;
            $referal->email=$request->email;
            $referal->phone=$request->phone;
            $referal->project_name=$request->project_name;
            $referal->flat_number=$request->flat_number;
            $referal->referal_name=$request->referal_name;
            $referal->referal_email=$request->referal_email;
            $referal->referal_phone=$request->referal_phone;
            $referal->save();
            return back()->with('success','Contact Submitted Succesfully');

    }
    public function careerAdd(Request $request)
    {

           
                $co=new CareerModel;
                $co->name=$request->name;
                $co->email=$request->email;
                $co->phone=$request->phone;
                $co->career=$request->career;
                
                $fileName = time().'_'.$request->file->getClientOriginalName();
                $filePath = $request->file('file')->storeAs('careers', $fileName, 'public');
                $co->file=  $filePath;

                $co->file= $filePath;
                $co->save();
                return back()->with('success','Apply succesfully');
            
          
        
    }
    public function getCareers()
    {
        $data= DB::select("select * from careers order by id desc");
        return view('admin/careers',["data"=>$data]);
    }
}
