<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PatientFamHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['patients'=>'patient_id','family_histories'=>'family_history_id',];

    protected $fillable = [

        'patient_id',
        'family_history_id',
        'details',
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
    public function family_histories()
    {
        return $this->belongsTo(Patient::class, 'family_history_id');
    }
}
