<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientVisualHearinSpeech extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',

        'uncorrected_fv_od20',
        'uncorrected_fv_os20',
        'uncorrected_nv_odj',
        'uncorrected_nv_osj',

        'corrected_fv_od20',
        'corrected_fv_os20',
        'corrected_nv_odj',
        'corrected_nv_osj',
        'ishihara', //Adequate = 0 Deficient=1
        'speech', //Normal = 0 Abnormal=1

        'ad_hearing', //Normal = 0 hearingloss=1
        'as_hearing', //Normal = 0 hearingloss=1
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
