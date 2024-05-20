<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPastIllness extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',
                            'illness_groups'=>'illness_group_id',
                            'illnesses'=>'illnes_id',
                            ];

    protected $fillable = [

        'patient_id',
        'illness_group_id',
        'illness_id',
        'is_cancer_or_hiv',
        'details',
        'stage',
        'on_chemo_or_chemical',
        'remarks',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
    public function illness_groups()
    {
        return $this->belongsTo(IllnessGroup::class, 'illness_group_id');
    }
    public function illnesses()
    {
        return $this->belongsTo(Illness::class, 'illnes_id');
    }
}
