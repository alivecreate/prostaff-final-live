<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['item_no', 'name', 'heading', 'category_id', 'description', 'full_description', 'image', 'image_title', 
    'page_title', 'price', 'discounted_price', 'slug', 'status','meta_keyword' ,'search_index'];
    
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    public function images()
    {
        return $this->hasMany(ProductImage::class);
    }

    public function image()
    {
        return $this->hasOne(ProductImage::class)->orderBy('created_at', 'asc');
    }
    
    public function singleImage($id)
    {
        return ProductImage::class->where('id', $id);
    }

}
