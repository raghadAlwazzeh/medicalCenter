<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TratmentPlan;


class TreatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $treat=TratmentPlan::where('patient_id', $request->patient_id)->first();
        if($treat==null){
            $treat1= new TratmentPlan;
            $treat1->patient_id=$request->patient_id;
            $treat1->treat_plan=$request->treat;
            if($request->dia=='covid'){
                $treat1->covid='yes';
            }
            if($request->dia=='cured'){
                $treat1->cured='yes';
            }
            $treat1->save();
        }
        else{
        $treat=TratmentPlan::where('patient_id',  $request->patient_id)->firstOrFail();
        $treat->patient_id=$request->patient_id;
        $treat->treat_plan=$request->treat1;
        if($request->dia=='covid'){
            $treat->covid='yes';
        }
        if($request->dia=='cured'){
            $treat->cured='yes';
        }
        $treat->save();
        }

        return redirect('/doc'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $treat=TratmentPlan::where('patient_id', $id)->first();
        $patient_id=$id;

        return view('treat.show',compact('treat','patient_id'));
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
