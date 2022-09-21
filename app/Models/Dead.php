<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PatientsInfo;
class Dead extends Model
{
    use HasFactory;
    protected $fillable = [
        'patient_id',
        'cause_of_death',
        'date_of_death',
        'time_of_death',
    ];


    public function info(){
        return $this->belongsTo('App\Models\PatientsInfo', 'patient_id');
    }
}
