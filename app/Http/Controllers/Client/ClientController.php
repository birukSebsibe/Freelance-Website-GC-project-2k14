<?php

namespace App\Http\Controllers\Client;

use App\Models\Job;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.client.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //Validate inputs
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:clients,email',
            'password'=>'required|min:5|max:30',
            'cpassword'=>'required|min:5|max:30|same:password'
         ]);
 
         $client = new client();
         $client->name = $request->name;
         $client->email = $request->email;
         $client->password = \Hash::make($request->password);
         $save = $client->save();
 
         if( $save ){
             return redirect()->back()->with('success','You are now registered successfully as Client');
         }else{
             return redirect()->back()->with('failed','Something went Wrong, failed to register');
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
           'email'=>'required|email|exists:clients,email',
           'password'=>'required|min:5|max:30'
        ],[
            'email.exists'=>'Incorrect Credentials'
        ]);
  
        $creds = $request->only('email','password');
  
        if( Auth::guard('client')->attempt($creds) ){
            return redirect()->route('client.home');
        }else{
            return redirect()->route('client.login')->with('fail','Incorrect Credentials');
        }
    }
  
    function logout(){
        Auth::guard('client')->logout();
        return redirect('client/login');
    }
}
