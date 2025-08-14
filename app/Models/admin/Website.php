<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;
    protected $table = 'website';

    protected $fillable = [
        'website_name',
        'tagline',
        'domain_name',
        'description',
        'primary_mail',
        'secondary_mail',
        'primary_phone',
        'secondary_phone',
        'address',
        'main_logo',
        'light_logo',
        'favicon',
    ];
}
