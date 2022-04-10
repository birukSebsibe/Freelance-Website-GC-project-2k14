<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showToFreelancer($id){
        return view('dashboard.freelancer.jobview')->with('job', Job::find($id));
    }

    public function showToClient($id){
        return view('dashboard.client.jobview')->with('bidding', Job::find($id));
    }

    public function editMainDescription(Request $request, $job_id){
        // $job = Job::find($request->id);
         $job = job::find($job_id);
         $job->title = $request->title;
         $job->description = $request->description;
         
  
         $save = $job ->save();
  
         if( $save ){
            Session::flash('message', 'Updated !');
            Session::flash('alert-class', 'alert-success');
             return redirect()->back();
         }else{
            Session::flash('message', 'Failed to Update ');
            Session::flash('alert-class', 'alert-danger');
             return redirect()->back();
         }
    }
}
