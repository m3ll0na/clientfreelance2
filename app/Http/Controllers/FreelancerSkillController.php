<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FreelancerSkillController;
use App\Models\FreelancerSkill;
use Illuminate\Support\Facades\DB;

class FreelancerSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancerskill = DB::table('freelancer_skills')->paginate(10);

        return view('freelancerskill.index',['freelancerskill' => $freelancerskill]);
    }
    
    public function search(Request $request)

	{
        $search = $request->input('search');

        $freelancerskill = DB::table('freelancer_skills')
        ->Where('skill_id','like',"%.$search.%")
        ->orWhere('freelancer_id','like',"%.$search.%")
        ->get();

        return view('freelancerskill.index',['freelancerskill' => $freelancerskill]);

    }
};