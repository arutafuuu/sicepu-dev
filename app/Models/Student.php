<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'student_id';

    protected $fillable = [
        'student_id',
        'name',
        'gender',
        'class_id',
        'phone',
        'email',
        'parent_name',
        'parent_phone',
        'parent_email',
    ];
}
