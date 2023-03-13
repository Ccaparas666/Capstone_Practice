<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class enrolledsubjectsInfo extends Model
{
    protected $table = 'enrolledsubjects';

    protected $fillable = [
        
        'subjectCode',
        'description',
        'units',
        'schedule',
    ];
    use HasFactory;
}
