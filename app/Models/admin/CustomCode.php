<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomCode extends Model
{
    use HasFactory;
    
    protected $table = 'custom_code';
    
    protected $fillable = ['js', 'css'];

}
