<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carier extends Model
{
    use HasFactory;
    protected $fillable =  [
        'name',
        'email',
        'phone_number',
        'job_position',
        'qualification'
        // 'file'

    ];
}
