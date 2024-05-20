<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPhysicalExam extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',
                            'physical_exams'=>'physical_exam_id',
                            ];

    protected $fillable = [

        'patient_id',
        'physical_exam_id',
        'normal',
        'findings',
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
    public function physical_exams()
    {
        return $this->belongsTo(PhysicalExam::class, 'physical_exam_id');
    }
}
