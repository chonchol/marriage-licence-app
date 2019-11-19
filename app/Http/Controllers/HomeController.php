<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $users = User::all()->count();
        //dd($users);
        return view('dashboard', compact('users'));
    }

    public function information()
    {
        $data = DB::table('general_infos')
            ->join('applicants', 'general_infos.id', '=', 'applicants.id')
            ->join('joint_applicants', 'general_infos.id', '=', 'joint_applicants.id')
            ->select('applicants.id', 'applicants.applicant_lname', 'applicants.applicant_dob', 'applicants.app_birth_country', 'applicants.applicant_age', 'applicants.app_prsnt_city')
            ->get();
        //dd($data);
        return view('infoTable', compact('data'));
    }
}
