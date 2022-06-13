<?php

namespace App\Http\Controllers;
use App\Models\Payment_milestone;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Proposal;
use App\Models\payment_by_ends;
use Illuminate\Http\Request;

class ProposalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Proposal::all();
        return view('usermanagement.view_proposal',compact('data'));
    }
    public function indexmile()
    {
        $data = Payment_milestone::all();
        return view('usermanagement.view_mile',compact('data'));
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
    public function indexendpay()
    {
        $data = Payment_by_ends::all();
        return view('usermanagement.view_pay',compact('data'));
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
    public function deletemile($id)
    {
        $delete = Payment_milestone::find($id);
        $delete->delete();
        Toastr::success('payment by milestone deleted successfully :)','Success');
        return redirect()->route('view/mile');
    }
    public function deleteendpay($id)
    {
        $delete = Payment_by_ends::find($id);
        $delete->delete();
        Toastr::success('Payment by endse deleted successfully :)','Success');
        return redirect()->route('view/endpay');
    }
}
