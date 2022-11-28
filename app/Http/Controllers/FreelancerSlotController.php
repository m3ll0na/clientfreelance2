<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\FreelancerSlotController;
use App\Models\FreelancerSlot;
use App\Models\Freelancer;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Builder;

class FreelancerSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $freelancerSkillId = $request->query("freelancerSkill");

        $freelancer = Freelancer::whereHas('skills', function (Builder $query) use ($freelancerSkillId) {
            $query->where('freelancer_skills.id',$freelancerSkillId);
        })->first();
        
        $skill = Skill::whereHas('freelancers', function (Builder $query) use ($freelancerSkillId) {
            $query->where('freelancer_skills.id',$freelancerSkillId);
        })->first();
        
        return view('freelancerslot.index',[
            "freelancer" => $freelancer,
            "skill" => $skill,
            "freelancerSkillId" => $freelancerSkillId
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancerslot.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FreelancerSlot;
        $data->id_freelancer = $request->id_freelancer;
        $data->id_client = $request->id_client;
        $data->status = $request->status;
        $data->location = $request->location;
        $data->startDateTime = $request->startDateTime;
        $data->endDateTime = $request->endDateTime;
        $data->description = $request->description;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('freelancerslot')->with('Success', 'Freelancerslot has been updated successfully.');
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
        $freelancerslot = FreelancerSlot::findOrFail($id);
        return view('freelancerslot.edit',compact('freelancerslot'));
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
        $data = FreelancerSlot::find($id);
        $data->id_freelancer = $request->id_freelancer;
        $data->id_client = $request->id_client;
        $data->status = $request->status;
        $data->location = $request->location;
        $data->startDateTime = $request->startDateTime;
        $data->endDateTime = $request->endDateTime;
        $data->description = $request->description;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('freelancerslot')->with('Success', 'Freelancerslot has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FreelancerSlot::find($id);
        $data->delete();
        return redirect()->route('freelancerslot')->with('success', 'Freelancerslot has been delete successfully.');
    }
}
