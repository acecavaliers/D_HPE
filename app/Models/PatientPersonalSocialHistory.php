<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPersonalSocialHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',
        'is_caffeine',
        'caffeine_details',
        'is_tobacco',
        'tobacco_pack_per_day',
        'tobacco_year',
        'is_alcohol',
        'alcohol_last_use',
        'is_illegal_drugs',
        'illegal_drugs_type',
        'illegal_drugs_last_use',
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
