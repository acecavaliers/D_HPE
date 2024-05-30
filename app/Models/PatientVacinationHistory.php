<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientVacinationHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',
                            'vaccinations'=>'vaccination_id',
                            ];

    protected $fillable = [

        'patient_id',
        'vaccination_id',
        'last_dose_date', 
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function vaccinations()
    {
        return $this->belongsTo(Vaccination::class, 'vaccination_id');
    }
}
