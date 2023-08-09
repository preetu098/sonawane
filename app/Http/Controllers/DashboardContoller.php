<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class DashboardContoller extends Controller
{
    public function addAdmin(Request $request)
    {
        
        $name=$request->email;
        $password=$request->password;
        $data=DB::insert("insert into admin(name,password) values('$name','$password')");
        if($data!=null)
        {
            return back()->with('success','Admin Added succesfully');
        }
        else 
        {
            echo "something went wrong";
        }
    }
    public function getAdminData()
    {
        $data=DB::select("select * from admin");
        return view('admin/admin',['data'=>$data]);
    }
    public function editConstruction(Request $request)
    {
        $id=$request->id;
        $data=DB::select("select * from construction where $id");
        return view('admin/editconstruction',['data'=>$data]);
    }
    public function updateConstruction(Request $request)
    {
        $id=$request->id;
        $header=$request->title;
        $desc=$request->description;
        $seo_title=$request->seo_title;
        $seodescription=$request->seodescription;
        $file=$request->file;
        if($request->hasFile('file')){
        
        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('construction', $fileName, 'public');
        DB::table('construction')->where('id',$id)->update(['header'=>DB::raw("'$header'"),'description'=>DB::raw("'$desc'"),'seo_title'=>DB::raw("'$seo_title'"),'seo_desc'=>DB::raw("'$seodescription'"),'image'=>DB::raw("'$filePath'")]);
        }
        DB::table('construction')->where('id',$id)->update(['header'=>DB::raw("'$header'"),'description'=>DB::raw("'$desc'"),'seo_title'=>DB::raw("'$seo_title'"),'seo_desc'=>DB::raw("'$seodescription'")]);

        return back()->with('success','Updated succesfully');

    }
    public function contacts()
    {
        $data=DB::select("select * from contact");
        return view('admin/contact',["data"=>$data]);
    }
    public function getLead(){
        $data=DB::select("select * from lead");
        return view('admin/lead',["data"=>$data]);
    }
}
