<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IndustryImage extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'industry_id', 'image_title'];
    
public function industry()
{
    return $this->belongsTo(Industry::class);
}
}