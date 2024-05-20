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
        '1st_ppd_datetime_administered',
        '1st_ppd_administered_by',
        '1st_ppd_result',
        '1st_ppd_interpreted_by',

        '2nd_ppd_datetime_administered',
        '2nd_ppd_administered_by',
        '2nd_ppd_result',
        '2nd_ppd_interpreted_by',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}
