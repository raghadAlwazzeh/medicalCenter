<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TratmentPlan extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'treat_plan',
    ];

    public function status(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }
}
