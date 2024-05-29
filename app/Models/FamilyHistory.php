<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FamilyHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'with_input',
        'is_active',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    // public function illnesses()
    // {
    //     return $this->hasMany(PatientFamHistory::class, 'illness_group_id');
    // }
}
