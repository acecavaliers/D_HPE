<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientAssesmentRecommendation extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',
        'assessment',
        'recommendation',
        'physician',
        'exam_date_time',
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
