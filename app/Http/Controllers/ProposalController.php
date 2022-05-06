<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Job;
use App\Models\Freelancer;
use App\Models\Client;
use App\Models\Proposal;
use Auth;
use Illuminate\Support\Facades\Crypt;

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
       $proposal  = new proposal ();
       $proposal ->letterToClient = $request->letterToClient;
       $proposal ->experienceDescription = $request->experienceDescription;
       $proposal ->max_payment = $request->max_payment;
       $proposal ->min_payment = 0;
       $proposal ->client_id = $job->client_id;
       $proposal ->job_id = $job->id;
       $proposal ->freelancer_id = Auth::user()->id;

       $save = $proposal ->save();
       if( $save ){
            Session::flash('message', 'Successfully Submitted Proposal !');
            Session::flash('alert-class', 'alert-success');
            return redirect('freelancer/job-detail/'.$job_id.'');
       }else{
            Session::flash('message', 'Failed to submit!');
            Session::flash('alert-class', 'alert-danger');
           return redirect()->back()->with('fail','Something went Wrong, failed to apply');
       }
    }

    public function bidding($status){

        // Status of job
        // 1 = bidding
        // 2 = Taken and on progress
        // 3 = Completed 
        // 4 = Canceled 
        
     
        if (!empty($status)) {
            $biddings = Job::select('*')
                ->where([
                    ['client_id', '=', Auth::user()->id],
                    ['status', '=', $status]
                ])->Paginate(5);
                $job_status = [
                    1=>"Bidding", 2=>"On Progress", 3=>"Completed", 4=>"Cancelled Jobs",
                ];
                if (!$biddings->isEmpty()){
                    return view('dashboard.client.bidding', ['biddings' => $biddings], ['status' => $job_status[$status]]);
                }else{
                    Session::flash('message', 'No jobs yet');
                    Session::flash('alert-class', 'alert-danger');
                    return view('dashboard.client.bidding', ['biddings' => $biddings], ['status' => $job_status[$status]]);
                }  
            
        }
    }

    public function viewProposals($job_id){

          //$myArray = array();
          $freelancer = array();
        $proposals = proposal::select('*')->where([
            ['job_id', '=', $job_id],
        ])->with('freelancer')->paginate(3);
        return view('dashboard.client.viewProposals', ['proposals' => $proposals]);
    }

    public function proposalDetail($prop_id){
        
        $proposal =  Proposal::where('id', $prop_id)->with('freelancer')->first();
        return view('dashboard.client.proposal-detail', ['proposal' => $proposal]);
    }
}   




