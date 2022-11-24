<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Http\Controllers\FreelancerController;
use App\Models\Freelancer; //data coming from database via this model

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($query)
    {
        $freelancers = Freelancer::get();
        // if($query){
        //     $freelancers = Freelancer::whereHas('skills', function ($query) {
        //         $query->where('skills.description', 'like',"%$query%")
        //         ->orWhere('freelancers.address','like',"%$query%")
        //         ->orWhere('freelancers.name', 'like',"%$query%");
        //     })->get();
        // }
        // $freelancer->loads('skills');
        // dd($freelancer);
        return view('freelancer.index',['freelancers' => $freelancers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('freelancer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Freelancer;
        $data->name = $request->name;
        $data->profile_image = $request->profile_image;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->accountNumber = $request->accountNumber;
        $data->accountBank = $request->accountBank;
        $data->hourlyWage = $request->hourlyWage;
        $data->id = $request->id;

        $data->profile_image = $request->profile_image;

        $data ->save();
        return redirect()->route('freelancer')->with('Success', 'Freelancer has been updated successfully.');
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
        $freelancer = Freelancer::where('id',$id)
            ->first();
        $freelancer->load('skills','slots');
        return view('freelancer.show',['freelancer' => $freelancer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $freelancer = Freelancer::findOrFail($id);
        return view('freelancer.edit',compact('freelancer'));
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
        $data = Freelancer::find($id);
        $data->name = $request->name;
        $data->profile_image = $request->profile_image;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->accountNumber = $request->accountNumber;
        $data->accountBank = $request->accountBank;
        $data->hourlyWage = $request->hourlyWage;
        $data->id = $request->id;

        $data ->save();
        return redirect()->route('freelancer')->with('Success', 'Freelancer has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Freelancer::find($id);
        $data->delete();
        return redirect()->route('freelancer')->with('success', 'Freelancer has been delete successfully.');
    }
}
