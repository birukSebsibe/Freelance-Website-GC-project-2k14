<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use DB;
use App\Models\User;
use App\Models\Categories;
use App\Models\Sub_categories;
use App\Models\Form;
use App\Rules\MatchOldPassword;
use Carbon\Carbon;
use Session;

use Auth;
use Hash;

class SubCategoryController extends Controller
{

    public function index()
    {



            $data = Sub_categories::all();
            return view('usermanagement.view_sub_category',compact('data'));


    }


    public function index2()
    {
        $subcategory = Categories::all();
        return view('form.subcategory')->with('subcategory',$subcategory);
    }


    public function saveRecord(Request $request){

        try{

            $subcategories = new Sub_categories();
            $subcategories->name     = $request->name;
            $subcategories->category_id     = $request->category_id;
            $subcategories->description = $request->description;


            if( $subcategories->save()){
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


    public function viewDetail($id)
    {
        // $data = DB::table('sub_categories')->where('id',$id)->get();
        // return view('usermanagement.view_editSubCategory',compact('data'));

        $data = Sub_categories::where('id',$id)->get();
        return view('usermanagement.view_editSubCategory',compact('data'));


    }



    public function update(Request $request)
    {


        $name       = $request->name;
        $category_id = $request->category_id;
        $description  = $request->description;


        $update = [


            'name'         => $name,
            'category_id'  => $category_id,
            'description'  => $description,

        ];

        // dd($update);
        Sub_categories::where('id',$request->id)->update($update);
        Toastr::success('User updated successfully :)','Success');
        return redirect()->route('view/subcategory');
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $delete = Sub_categories::find($id);
        $delete->delete();
        Toastr::success('Sub Category deleted successfully :)','Success');
        return redirect()->route('view/subcategory');
    }
}
