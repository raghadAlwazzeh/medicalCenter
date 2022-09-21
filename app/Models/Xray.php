<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Xray extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'image'
        
    ];
    public function info2(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }
}
