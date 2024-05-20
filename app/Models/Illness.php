<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Illness extends Model
{
    use HasFactory, SoftDeletes;

    protected $foreignKeys = ['illness_groups'=>'illness_group_id'];

    protected $fillable = [

        'name',
        'is_active',
        'illness_group_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];
    public function getForeignKeys(){
        return $this->foreignKeys;
    }
    public function illness_groups()
    {
        return $this->belongsTo(IllnessGroup::class, 'illness_group_id');
    }
}
