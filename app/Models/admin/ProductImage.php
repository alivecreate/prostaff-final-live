<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;
    
    protected $fillable = ['image', 'product_id', 'image_title'];

    
public function product()
{
    return $this->belongsTo(Product::class);
}
}
