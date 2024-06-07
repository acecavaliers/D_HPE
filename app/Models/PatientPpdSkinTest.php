<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPpdSkinTest extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',
                            ];

    protected $fillable = [

        'patient_id',
        'is_applied',
        'fst_ppd_datetime_administered',
        'fst_ppd_administered_by',
        'fst_ppd_result',
        'fst_ppd_interpreted_by',

        'snd_ppd_datetime_administered',
        'snd_ppd_administered_by',
        'snd_ppd_result',
        'snd_ppd_interpreted_by',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
