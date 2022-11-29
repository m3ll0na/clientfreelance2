<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ClientController;
use App\Models\Client; //data is coming from the database via model

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = Client::get();
        $freelancerSkillId = $request->freelancerSkillId;
        $bookingDate = $request->bookingDate;
        $slotTime = $request->slotTime;

        $freelancerSkillId = $request->freelancerSkillId;
        $skill = Skill::whereHas('freelancers', function (Builder $query) use ($freelancerSkillId) {
            $query->where('freelancer_skills.id',$freelancerSkillId);
        })->first();

        $freelancer = Freelancer::whereHas('skills', function (Builder $query) use ($freelancerSkillId) {
            $query->where('freelancer_skills.id',$freelancerSkillId);
        })->first();


        return view('client.index',[
            "client" => $client,
            "freelancerSkillId" => $freelancerSkillId,
            "bookingDate" => $bookingDate,
            "slotTime" => $slotTime,
            "skill" =>  $skill,
            "freelancer" => $freelancer
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Client;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('client')->with('Success', 'Client has been updated successfully.');

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
        $client = Client::findOrFail($id);
        return view('client.edit',compact('client'));
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
        $data = Client::find($id);
        $data->name = $request->name;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('client')->with('Success', 'Client has been updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Client::find($id);
        $data->delete();
        return redirect()->route('client')->with('success', 'Client has been delete successfully.');
    }
}
