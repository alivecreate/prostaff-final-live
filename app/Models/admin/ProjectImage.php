<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'project_id', 'image_title'];
    
public function product()
{
    return $this->belongsTo(Product::class);
}
}