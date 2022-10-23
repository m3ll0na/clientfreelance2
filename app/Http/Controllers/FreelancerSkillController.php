<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FreelancerSkillController;
use App\Models\FreelancerSkill;

class FreelancerSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $freelancerskill = Freelancerskill::get();
        return view('freelancerskill.index',compact('freelancerskill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancerskill.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new FreelancerSkill;
        $data->freelancer_id = $request->freelancer_id;
        $data->skill_id = $request->skill_id;
        $data->description = $request->description;
        $data->rate = $request->rate;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('freelancerskill')->with('Success', 'Freelancerskill has been updated successfully.');
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
        $freelancerskill = FreelancerSkill::findOrFail($id);
        return view('freelancerskill.edit',compact('freelancerskill'));
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
        $data = FreelancerSkill::find($id);
        $data->freelancer_id = $request->freelancer_id;
        $data->skill_id = $request->skill_id;
        $data->description = $request->description;
        $data->rate = $request->rate;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('freelancerskill')->with('Success', 'Freelancerskill has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = FreelancerSkill::find($id);
        $data->delete();
        return redirect()->route('freelancerslot')->with('success', 'Freelancerslot has been delete successfully.');
    
    }
}
