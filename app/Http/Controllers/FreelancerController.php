<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\User;
use App\Models\Job_categories;
use App\Models\Sub_categories;
use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;
use App\Models\Freelancer;
use App\Models\Country;

use Auth;
use Hash;


class FreelancerController extends Controller
{

    public function index()
    {
        $data = Freelancer::all();
        return view('usermanagement.view_freelancer',compact('data'));

    }

    public function viewDetail($id)
    {
        $data =  Freelancer::all()->where('id',$id);
        return view('usermanagement.view_editFreelancer',compact('data'));



    }






    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = Freelancer::find($id);
        $delete->delete();
        Toastr::success('Freelancer deleted successfully :)','Success');
        return redirect()->route('view/freelancer');
    }
}
