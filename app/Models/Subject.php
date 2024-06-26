<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public $incrementing = false;

    protected $primaryKey = 'subject_id';

    protected $fillable = [
        'subject_id',
        'name',
    ];

}
