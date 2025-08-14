<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['item_no', 'name', 'customer_name', 'description', 'image', 'para1', 'para2', 'gallery', 'slug', 'project_status', 'status'];
        
    public function seo()
    {
        return $this->morphOne(Seo::class, 'seoable');
    }
    public function images()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function image()
    {
        return $this->hasOne(ProjectImage::class)->orderBy('created_at', 'asc');
    }
    
    public function singleImage($id)
    {
        return ProjectImage::class->where('id', $id);
    }

}
