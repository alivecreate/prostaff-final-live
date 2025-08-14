<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = ['item_no', 'items','name', 'image', 'gallery', 'slug', 'status'];
        
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    public function images()
    {
        return $this->hasMany(GalleryImage::class);
    }

    public function image()
    {
        return $this->hasOne(GalleryImage::class)->orderBy('created_at', 'asc');
    }
    
    public function singleImage($id)
    {
        return GalleryImage::class->where('id', $id);
    }

}
