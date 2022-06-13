<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = DB::table('users')->count();
        $sub_categories = DB::table('sub_categories')->count();
        $categories = DB::table('categories')->count();
        $freelancers = DB::table('freelancers')->count();
        $payment_milestone = DB::table('payment_milestones')->count();
        $payment_by_ends = DB::table('payment_by_ends')->count();
        $proposals = DB::table('proposals')->count();
        $clients = DB::table('clients')->count();
        $activity_logs = DB::table('activity_logs')->count();

        $data['pieChart'] = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("MONTHNAME(created_at) as month_name"))
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->orderBy('count')
        ->get();
        return view('home',compact('users','freelancers','payment_by_ends','payment_milestone','sub_categories','categories','proposals','clients','activity_logs'));
    }









}

