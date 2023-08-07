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
            return redirect('/admin');
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
}
