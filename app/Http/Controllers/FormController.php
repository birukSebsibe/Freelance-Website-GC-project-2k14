<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Staff;
use App\Models\User;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use DB;

class FormController extends Controller
{
    // view form
    public function index()
    {
        return view('form.form');
    }

    // view record
    public function viewRecord()
    {
        $data = DB::table('staff')->get();
        return view('view_record.viewrecord',compact('data'));
    }

    // view detail
    public function viewDetail($id)
    {
        $data = DB::table('staff')->where('id',$id)->get();
        return view('view_record.viewdetail',compact('data'));

    }

    // view update
    public function viewUpdate(Request $request)
    {
        try{
            $id           = $request->id;
            $rec_id       = $request->rec_id;
            $fullName     = $request->fullName;
            $email_address = $request->email_address;
            $sex          = $request->sex;
            $phone_number = $request->phone_number;
            $address     =  $request->address;
            $job_profession   = $request->job_profession;
            $linker = $request->linker;
            $total_earn       = $request->total_earn;

            $update = [

                'id'            => $id,
                'rec_id'        => $rec_id,
                'full_name'     => $fullName,
                'email_address' => $email_address,
                'sex'           => $sex,
                'phone_number'  => $phone_number,
                'address'      => $address,
                'job_profession' => $job_profession,
                'linker'    => $linker,
                'total_earn'        => $total_earn,
            ];
            Staff::where('id',$request->id)->update($update);
            Toastr::success('Data updated successfully :)','Success');
            return redirect()->route('form/view/detail');
        }catch(\Exception $e){

            Toastr::error('Data updated fail :)','Error');
            return redirect()->route('form/view/detail');
        }
    }

    // save
    public function saveRecord(Request $request)
    {
        // $request->validate([
        //     'fullName'     => 'required|string|max:255',
        //     'email_address' => 'required|string|email|max:255',
        //     'sex'          => 'required',
        //     'phone_number' => 'required|numeric|min:9',
        //     'address'     => 'required|string|max:255',
        //     'job_profession'     => 'required|string|max:255',

        // ]);
        try{

            $Staff = new Staff();
            $Staff->full_name     = $request->full_name;
            $Staff->email_address = $request->emailAddress;
            $Staff->sex           = $request->sex;
            $Staff->phone_number  = $request->phone_number;;
            $Staff->address       = $request->address;
            $Staff->job_profession    = $request->job_profession;

            if($Staff->save()){
                Toastr::success('Data added successfully :)','Success');
                return redirect()->back();
            }
            else{
                Toastr::success('Failed to insert :)','Danger');
                return redirect()->back();
            }

        }catch(\Exception $e){

            Toastr::error('Data added fail :)','Error');
            return redirect()->back();
        }
    }

    // view delete
    public function viewDelete($id)
    {
        $delete = Staff::find($id);
        $delete->delete();
        Toastr::success('Data deleted successfully :)','Success');
        return redirect()->route('form/view/detail');
    }
}
