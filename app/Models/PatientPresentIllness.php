<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientPresentIllness extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id',];

    protected $fillable = [

        'patient_id',
        'details',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class, 'patient_id');
    }
}