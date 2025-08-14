<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;
    protected $fillable = ['item_no', 'name', 'image', 'gallery', 'slug', 'status'];
        
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    public function images()
    {
        return $this->hasMany(IndustryImage::class);
    }

    public function image()
    {
        return $this->hasOne(IndustryImage::class)->orderBy('created_at', 'asc');
    }
    
    public function singleImage($id)
    {
        return IndustryImage::class->where('id', $id);
    }

}
