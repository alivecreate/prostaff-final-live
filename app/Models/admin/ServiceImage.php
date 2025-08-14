<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceImage extends Model
{
    use HasFactory;
    protected $fillable = ['image', 'service_id', 'image_title'];
    
public function product()
{
    return $this->belongsTo(Product::class);
}
}