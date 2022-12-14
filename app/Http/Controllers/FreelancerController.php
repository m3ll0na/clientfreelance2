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
    public function index()
    {
        $freelancer = Freelancer::get();
        return view('freelancer.index',compact('freelancer'));
    }

    public function oldindex()
    {
        $freelancer = Freelancer::get();
        return view('freelancer.oldindex',compact('freelancer'));
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
        $data->photo = $request->photo;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->accountNumber = $request->accountNumber;
        $data->accountBank = $request->accountBank;
        $data->hourlyWage = $request->hourlyWage;
        $data->id = $request->id;

        $photo = null;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/freelancer_photo',$name);
            $photo = $name; 
        }else{
            $photo = $request->photo;
        }

        $data->photo=$photo;


        $data ->save();
        return redirect()->route('freelancer')->with('success', 'Freelancer added');
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
        $data->photo = $request->photo;
        $data->description = $request->description;
        $data->address = $request->address;
        $data->email = $request->email;
        $data->phoneNumber = $request->phoneNumber;
        $data->accountNumber = $request->accountNumber;
        $data->accountBank = $request->accountBank;
        $data->hourlyWage = $request->hourlyWage;
        $data->id = $request->id;

        $photo = null;

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $name = date('YmdHis').'.'.$file->getClientOriginalExtension();
            $file->move(public_path().'/freelancer_photo',$name);
            $photo = $name; 
        }else{
            $photo = $request->photo;
        }

        $data->photo =$photo;


        $data ->save();
        return redirect()->route('freelancer')->with('success', 'Freelancer added');
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
