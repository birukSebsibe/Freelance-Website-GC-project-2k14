<?php

namespace App\Http\Controllers;
use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function showToFreelancer($id){
        return view('dashboard.freelancer.jobview')->with('job', Job::find($id));
    }
}
