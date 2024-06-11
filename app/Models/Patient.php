<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['account_types'=>'account_type_id'];

    protected $fillable = [

        'first_name',
        'middle_name',
        'last_name',
        'birth_date',
        'gender',
        'age',
        'hospital_no',
        'case_no',
        'job_title',
        'bldgsubd',
        'street',
        'barangay',
        'city',
        'country',
        'province',
        'region',
        'zipcode',
        'account_type_id',
        'account_detail',
        'is_pre_employment',
        'nursename',
        'nurseDate',
        'physician',
        'exam_date_time',
        'created_by',
        'updated_by',
        'deleted_by'

    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function account_types()
    {
        return $this->belongsTo(AccountType::class, 'account_type_id');
    }
}
