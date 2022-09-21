<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientClinicalExamination extends Model
{
    use HasFactory;


    protected $fillable = [
        'patient_id',
        'visit_id',
        'general_appearance',
        'skin_observation',
        'pulse',
        'respiratory_rate',
        'temperature',
        'blood_pressure',
        'cardio_vascular_system',
        'respiratory_system',
        'neurological_system',
        'digestive_system',
    ];
    public function patientinf1(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }
}
