<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
use DB;

class JobController extends Controller
{
    public function addModel(Request $request)
    {
        
      
        $job=new JobModel;
        $job->job=$request->job;
        $job->exp=$request->experience;
        $job->education=$request->education;
        $job->emplo=$request->emp_type;
        $job->skills=$request->skills;
        $job->save();
        return back()->with('success','Successfully Added');

    }
    public function getRecord()
    {
        $data=DB::select("select * from job order by id desc");
        return view('client\carrers',['record'=>$data]);
    }

    public function showJobs()
    {
        $data=DB::select("select * from job order by id desc");
        return view('admin\showJobs',['record'=>$data]);
    }

    public function deleteJob(Request $request)
    {
        $id=$request->id;
        DB::delete("delete from job where $id");
        return back()->with('success','Deleted succesfully');
    }

    public function editjob(Request $request)
    {
        $id=$request->id;
        $data=DB::select("select * from job where $id");
        return view('admin/editJob',['data'=>$data]);
    }
    public function editjobData(Request $request)
    {
        $id=$request->id;
        $job=$request->job;
        $exp=$request->exp;
        $edu=$request->edu;
        $emp=$request->emp;
        $skills=$request->skill;
        DB::table('job')->where('id',$id)->update(['job'=>DB::raw("'$job'"),'exp'=>DB::raw("'$exp'"),'education'=>DB::raw("'$edu='"),'emplo'=>DB::raw("'$emp'"),'skills'=>DB::raw("'$skills'")]);

        return back()->with('success','Updated succesfully');
    }
}
