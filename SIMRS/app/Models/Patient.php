<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'no_rm',
        'nik',
        'name',
        'gender',
        'birth_date',
        'phone',
        'address',
        'blood_type',
    ];
}