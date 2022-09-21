<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LabResults;
use App\Models\DemanTest;
use Illuminate\Support\Facades\DB;
class LabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demands=DemanTest::where('blood_test_required', 'yes')->get();
       // $demands=DemanTest::all();
        return view('lab.dashboard', compact('demands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('lab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=$request->patient_id;
        $result=new LabResults;
        $result->patient_id=$id;
        $result->WBC=$request->WBC; 
        $result->LYMp=$request->LYM;
        $result->MIDp=$request->MIDp;
        $result->GRANp=$request->GRANp;
        $result->LYMn=$request->LYMn;
        $result->MIDn=$request->MIDn; 
        $result->GRANn=$request->GRANn;
        $result->RBC=$request->RBC;
        $result->HGB=$request->HGB; 
        $result->HCT=$request->HCT;
        $result->MCV=$request->MCV; 
        $result->MCH=$request->MCH; 
        $result->MCHC=$request->MCHC; 
        $result->RDW_CV=$request->RDW_CV; 
        $result->RDW_SD=$request->RDW_SD;
        $result->PLT=$request->PLT; 
        $result->MPV=$request->MPV; 
        $result->PDW=$request->PDW; 
        $result->PCT=$request->PCT; 
        $result->P_LCR=$request->P_LCR; 
        $result->P_LCC=$request->P_LCC; 
        $result->GLUCOSE=$request->GLUCOSE; 
        $result->CREAT=$request->CREAT; 
        $result->Urea=$request->Urea;
        $result->save();
        $demand=DemanTest::where('patient_id', $id)->get();
        foreach($demand as $deman){
        $deman->patient_id=$id;
        $deman->blood_test_required='no';
        $deman->save();}
        return redirect('/lab');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('lab.show', compact('id'));
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
