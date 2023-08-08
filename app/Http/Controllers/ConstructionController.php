<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContructionModal;
use DB;

class ConstructionController extends Controller
{
    public function addConstruction(Request $request)
    {
        $construct=new ContructionModal;
        $construct->header=$request->header;
        $construct->description=$request->description;
        $construct->seo_title=$request->seo_title;
        $construct->seo_desc=$request->seo_desc;
        $construct->showpage=$request->show;
       

        $fileName = time().'_'.$request->file->getClientOriginalName();
        $filePath = $request->file('file')->storeAs('construction', $fileName, 'public');
        $construct->image =  $filePath;

        $construct->save();
        return back()->with('success','Data insert succesfully');
    }
    public function showUpdate()
    {
        $data=DB::select("select * from construction");
        return view('admin/showContruction',['all_record'=>$data]);
    }
}
