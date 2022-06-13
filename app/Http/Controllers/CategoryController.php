<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\User;

use App\Models\Categories;

use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;

use Auth;
use Hash;

class CategoryController extends Controller
{

    public function index()
    {

           $data = DB::table('categories')->get();
            return view('usermanagement.view_category',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {
        return view('form.category');
    }
    public function saveRecord(Request $request){

        try{

            $categories = new categories();
            $categories->name     = $request->name;
            $categories->description = $request->description;


            if( $categories->save()){
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
    public function update(Request $request)
    {

        $id         = $request->id;
        $name     = $request->name;
        $description  = $request->description;


        $update = [

            'id'           => $id,
            'name'         => $name,
            'description'  => $description,

        ];


        Categories::where('id',$request->id)->update($update);
        Toastr::success('User updated successfully :)','Success');
        return redirect()->route('view/category');
    }

    public function viewDetail($id)
    {
        $data = DB::table('categories')->where('id',$id)->get();
        return view('usermanagement.view_editCategory',compact('data'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {

        $delete = Categories::find($id);
        $delete->delete();
        Toastr::success('Category deleted successfully :)','Success');
        return redirect()->route('view/category');
    }

}
