<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobApplications extends Model
{
    use HasFactory;
    protected $fillable = [
        'application_id',
        'firstname',
        'lastname',
        'email',
        'address',
        'education',
        'years_of_experience',
        'other'
    ];
}
