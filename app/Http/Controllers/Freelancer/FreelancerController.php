<?php

namespace App\Http\Controllers\Freelancer;
use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Freelancer;
use Illuminate\Support\Facades\Auth;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('dashboard.freelancer.home');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    function create(Request $request){
        //Validate inputs
        $request->validate([
           'name'=>'required',
           'email'=>'required|email|unique:freelancers,email',
           'password'=>'required|min:5|max:30',
           'cpassword'=>'required|min:5|max:30|same:password'
        ]);

        $freelancer = new freelancer();
        $freelancer->name = $request->name;
        $freelancer->email = $request->email;
        $freelancer->password = \Hash::make($request->password);
        $save = $freelancer->save();

        if( $save ){
            return redirect()->back()->with('success','You are now registered successfully as freelancer');
        }else{
            return redirect()->back()->with('fail','Something went Wrong, failed to register');
        }
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
    public function destroy($id)
    {
        //
    }

    

  function check(Request $request){
      //Validate Inputs
      $request->validate([
         'email'=>'required|email|exists:freelancers,email',
         'password'=>'required|min:5|max:30'
      ],[
          'email.exists'=>'Incorrect Credentials'
      ]);

      $creds = $request->only('email','password');

      if( Auth::guard('freelancer')->attempt($creds) ){
          return redirect()->route('freelancer.home');
      }else{
          return redirect()->route('freelancer.login')->with('fail','Incorrect Credentials');
      }
  }

  function logout(){
      Auth::guard('freelancer')->logout();
      return redirect('freelancer/login');
  }
}
