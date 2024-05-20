<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientObGyneHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',
        'gyne_surgery',
        'is_pregnant',
        'g',
        'p',
        'age_of_gestation',
        'expected_delivery',
        'last_menstrual_period',
        'prev_menstrual_period',
        'age_of_menarche ',
        'age_of_menopausal',
        'is_birth_control',
        'bc_type',
        'pap_smear',
        'mammography',
        'is_dysmenorrhea',
        'is_viginal_discharge',
        'is_pain_viginal_sex',
        'is_vaginal_lesions_mass_warts',
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
