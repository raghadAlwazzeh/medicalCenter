<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientInterviewing;
use App\Models\PatientClinicalExamination;
use App\Models\PatientsInfo;
use App\Models\LabResults;
use App\Models\TratmentPlan;
use App\Models\Dead;
use App\Models\DemanTest;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$patients=DB::table('patient_interviewings')
                ->join('patient_clinical_examinations', 'patient_interviewings.patient_id','=','patient_clinical_examinations.patient_id')
                ->select('patient_interviewings.*', 'patient_clinical_examinations.*')
                ->where('patient_interviewings.habits','=',DB::raw('patient_clinical_examinations.pulse'))->paginate(1);*/
        //$patients=PatientInterviewing::find(3);
      /*  $patients=DB::table('patient_interviewings')
                ->leftjoin('patient_clinical_examinations', 'patient_interviewings.patient_id','=','patient_clinical_examinations.patient_id')
                ->get();*/
            $patients= PatientsInfo::all();
            $deads= Dead::count();
            $covids= TratmentPlan::where('covid', 'yes')->count();
            $cureds= TratmentPlan::where('cured', 'yes')->count();
            return view('doc.dashboard',compact (['patients', 'deads', 'covids', 'cureds']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('doc.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inter=PatientInterviewing::where('patient_id', $request->patient_id)->first();
        if($inter==null){
        $patient=new PatientInterviewing;
        $patient->patient_id= $request->patient_id;
        $patient->visit_id= $request->visit_id;
        $patient->chief_complaint= $request->complaint;
        $patient->history_of_present_illness=$request->ihistory;
        $patient->past_medical_history=$request->mhistory;
        $patient->habits=$request->habits;
        $patient->family_history=  $request->fhistory;
        $patient->save();}
        else{
            $inter=PatientInterviewing::where('patient_id', $request->patient_id)->firstOrFail();
            $inter->patient_id= $request->patient_id;
            $inter->chief_complaint= $request->complaint;
            $inter->history_of_present_illness=$request->ihistory;
            $inter->past_medical_history=$request->mhistory;
            $inter->habits=$request->habits;
            $inter->family_history=  $request->fhistory;
            $inter->save();
        }

        $patient1=new PatientClinicalExamination;
        $patient1->patient_id=$request->patient_id;
        $patient1->visit_id= $request->visit_id;
        $patient1->general_appearance=$request->appearance;
        $patient1->skin_observation=$request->skin;
        $patient1->pulse=$request->pulse;
        $patient1->respiratory_rate=$request->respiratory;
        $patient1->temperature=$request->temperature;
        $patient1->blood_pressure=$request->pressure;
        $patient1->cardio_vascular_system=$request->cardio;
        $patient1->respiratory_system=$request->respiratorys;
        $patient1->neurological_system=$request->neurological;
        $patient1->digestive_system=$request->digestive;
        $patient1->save();

       /* $patient2=new LabResults;
        $patient2->patient_id=$request->patient_id;
        $patient2->visit_id= $request->visit_id;
        $patient2->save();*/

        $patient3=new DemanTest;
        $patient3->patient_id=$request->patient_id;
        $patient3->blood_test_required= $request->blood;
        $patient3->xray_required= $request->xray;
        $patient3->save();

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
        //$patientsinf= PatientsInfo::find($id);
       /* $patients=DB::table('patient_interviewings')
                ->join('patient_clinical_examinations', 'patient_interviewings.patient_id','=','patient_clinical_examinations.patient_id')
                ->join('lab_results', 'patient_interviewings.patient_id','=','lab_results.patient_id')
                ->select('patient_interviewings.*', 'patient_clinical_examinations.*', 'lab_results.*')
                ->where('patient_interviewings.visit_id','=',DB::raw('patient_clinical_examinations.visit_id'))
                ->where('patient_interviewings.visit_id','=',DB::raw('lab_results.visit_id'))
                ->where('patient_clinical_examinations.patient_id',$id)->paginate(1);*/

             /*$patients=DB::table('patient_clinical_examinations')
                ->join('lab_results', 'patient_clinical_examinations.patient_id','=','lab_results.patient_id')
                ->select('patient_clinical_examinations.*', 'lab_results.*')
                ->where('patient_clinical_examinations.visit_id','=',DB::raw('lab_results.visit_id'))
                ->where('patient_clinical_examinations.patient_id',$id)->paginate(1);*/
            $patients=PatientClinicalExamination::where('patient_id', $id)->paginate(1);
            $lab=LabResults::where('patient_id', $id)->first();
            $inter= PatientInterviewing::where('patient_id', $id)->first();
            $treat=TratmentPlan::where('patient_id', $id)->first();
        $patientinf= PatientsInfo::find($id);
                return view('doc.show',compact (['patients','patientinf', 'inter', 'treat', 'lab']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $patient=PatientsInfo::find($id);
        $inter=PatientInterviewing::where('patient_id', $id)->first();
        return view('doc.edit',compact (['patient', 'inter']));
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
