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
        $page = $request->input('page');

        if($search){
            $freelancers = Freelancer::whereHas('skills', function ($query) use ($search) {
                $query->where('skills.description', 'like',"%$search%")
                ->orWhere('freelancers.address','like',"%$search%")
                ->orWhere('freelancers.description','like',"%$search%")
                ->orWhere('freelancer_skills.description', 'like',"%$search%")
                ->orWhere('freelancer_skills.rate', 'like',"%$search%")
                ->orWhere('freelancers.name', 'like',"%$search%");
            })->get();
        }else{
            $freelancers = Freelancer::get();
        }
        $freelancers->load('skills');

        return view('freelancerskill.index',[
            'freelancers' => $freelancers,
            'search' => $search]);

    }
};