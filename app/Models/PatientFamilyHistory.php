<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientFamilyHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',
        'is_cardiac',
        'is_hypertension',
        'is_stroke',
        'is_diabetes_mellitus',
        'is_bronchial_asthma',
        'is_bleeding_disorder',
        'is_glaucoma',
        'is_thyroid_disorder',
        'is_mentyal_illness',
        'is_malignancy',
        'otherdetails',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',

    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
