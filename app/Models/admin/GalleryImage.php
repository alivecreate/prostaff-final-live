<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GalleryImage extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'gallery_id', 'image_title'];
    
public function gallery()
{
    return $this->belongsTo(Gallery::class);
}
}