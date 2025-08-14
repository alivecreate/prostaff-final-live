<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    

    protected $fillable = ['item_no', 'name', 'heading', 'parent_id', 'description', 'full_description', 'image', 'image_title', 
    'page_title', 'slug', 'status'];

    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    
    public function products($number = null)
    {   
        if(!$number){
            return $this->hasMany(Product::class)->where('status', 1);
        }
        // dd($number);
        
        return $this->hasMany(Product::class)->limit($number)->get();

    }

    public function services()
    {
        return $this->hasMany(Service::class);
    }

}
