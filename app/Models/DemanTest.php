<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemanTest extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'blood_test_required'
        
    ];
    public function info1(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }

}
