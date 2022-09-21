<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientsInfo;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients= PatientsInfo::all();
       // return $patients;
       // return view('recp.dashboard', compact ('patients'));
        return view('recp.dashboard')->with('patients',$patients);
        //return view('recp.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('recp.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return $request->all();
        //return $request->name;
        $patient=new PatientsInfo;
        $patient->name= $request->name;
        $patient->surname= $request->surname;
        $patient->middle_name=$request->middle_name;
        $patient->gender=$request->gender;
        $patient->age=  $request->age;
        $patient->job= $request->job;
        $patient->phone_number=$request->phone_number;
        $patient->place_of_residence= $request->place;
        $patient->save();
        return redirect('/recp');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient= PatientsInfo::find($id);
        return view('recp.show')->with('patient', $patient);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
