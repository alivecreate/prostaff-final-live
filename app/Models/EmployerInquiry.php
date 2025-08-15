<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmployerInquiry extends Model
{
    protected $fillable = [
        'company_name',
        'job_requirement',
        'country',
        'phone',
        'email',
        'note',
    ];
}
