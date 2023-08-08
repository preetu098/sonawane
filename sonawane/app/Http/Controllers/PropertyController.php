<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PropertyAdd;

class PropertyController extends Controller
{
        public function addProperty(Request $request)
        {
            $request->validate([
                'file'=>'required|mimes:png,jpg,jpeg'
            ]);
            $property=new PropertyAdd;
            $property->product_table=$request->product_title;
            $property->slug=$request->slug;
            $property->city=$request->city;
            $property->address=$request->address;
            $property->email=$request->email;
            $property->phone=$request->phone;
            $property->website=$request->website;
            // $property->image=$request->file;


            $fileName = time().'_'.$request->file->getClientOriginalName();
            $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
            $property->image = '/storage/' . $filePath;


            $property->status=$request->status;
            $property->complete=$request->complete;
            $property->seo=$request->seo;
            $property->seo_desc=$request->seo_desc;
            $property->save();
            return back()->with('success','Data insert succesfully');
            // return view('property-create',['message'=>'Added succesfully']);
        }
}
