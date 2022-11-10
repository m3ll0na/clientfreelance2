<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FreelancerSkillController;
use App\Models\FreelancerSkill;
use App\Models\Freelancer;
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

        $freelancers = Freelancer::get();

        return view('freelancerskill.index',['freelancers' => $freelancers]);

    }
};