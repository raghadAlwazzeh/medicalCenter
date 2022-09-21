<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabResults extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'visit_id',
        'WBC',
        'LYMp',
        'MIDp',
        'GRANp',
        'LYMn',
        'MIDn',
        'GRANn',
        'RBC',
        'HGB',
        'HCT',
        'MCV',
        'MCH',
        'MCHC',
        'RDW_CV',
        'RDW_SD',
        'PLT',
        'MPV',
        'PDW',
        'PCT',
        'P_LCR',
        'P_LCC',
        'GLUCOSE',
        'CREAT',
        'Urea',
        'CRP_2',

        
    ];
    
}
