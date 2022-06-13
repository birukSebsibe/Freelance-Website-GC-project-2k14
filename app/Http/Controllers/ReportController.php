<?php

namespace App\Http\Controllers;

use App\Models\Compliants;
use App\Models\Feedback;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Compliants::all();
        return view('usermanagement.view_complient',compact('data'));
    }
    public function index2()
    {
        $data = Feedback::all();
        return view('usermanagement.view_feed',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        $delete = Compliant::find($id);
        $delete->delete();
        Toastr::success('Compliant deleted successfully :)','Success');
        return redirect()->route('view/complient');
    }

    public function delete2($id)
    {
        $delete = Feedback::find($id);
        $delete->delete();
        Toastr::success('Feedback deleted successfully :)','Success');
        return redirect()->route('view/feed');
    }
}
