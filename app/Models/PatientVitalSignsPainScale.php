<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientVitalSignsPainScale extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',
                            'vaccinations'=>'vaccination_id',
                            ];

    protected $fillable = [

        'patient_id',
        'height',
        'weight',
        'bmi',
        'sthenic',
        'asthenic',
        'hypersthenic',
        'blood_pressure',
        'pulse_rate',
        'respiration_rate',
        'Temperature',
        'pain',
        'is_active',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
