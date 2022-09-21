<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientInterviewing extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'visit_id',
        'chief_complaint',
        'history_of_present_illness',
        'habits',
        'family_history',
    ];
    public function patientinf(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }
}
