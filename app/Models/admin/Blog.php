<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'item_no', 'image', 'image_alt', 'image_title',
        'title', 'heading', 'description', 'page_title', 'slug', 'status'
    ];
    
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }

}
