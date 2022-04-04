<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Proposal;
use Auth;

class ProposalController extends Controller
{
    public function submit(Request $request, $job_id){
       // $job = Job::find($request->id);
        $request->validate([
          'letterToClient'=>'required',
          'experienceDescription'=>'required',
          'max_payment' => 'required',
       ]);
       $job = job::find($job_id);

      // return "<h1>".Auth::user()->id."</h1>";
       $proposal  = new proposal ();
       $proposal ->letterToClient = $request->letterToClient;
       $proposal ->experienceDescription = $request->experienceDescription;
       $proposal ->max_payment = $request->max_payment;
       $proposal ->min_payment = 0;
       $proposal ->client_id = $job->client_id;
       $proposal ->freelancer_id = Auth::user()->id;

       $save = $proposal ->save();

       if( $save ){
           return redirect()->route('freelancer.home')->with('success','Proposal submitted successfully');
       }else{
           return redirect()->back()->with('fail','Something went Wrong, failed to apply');
       }
    }
}
