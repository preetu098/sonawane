<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
        public function login(Request $request)
        {
                $email=$request->email;
                $password=$request->password;

               $data=DB::select("select * from admin where name='$email' and password='$password'");
               if($data)
               {
                $request->session()->put('user', $email);
                return view('admin/index',['login'=>$request->session()->get('user')]);
               }
               else 
               {
                return view('login',['message'=>'invalid information']);
               }
        }
       public function logout(Request $request)
        {
            $request->session()->flush();
            $request->session()->forget('user');
          
            return redirect('login');
        }
}
