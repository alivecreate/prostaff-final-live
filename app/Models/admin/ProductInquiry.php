<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductInquiry extends Model
{
    use HasFactory;
    
    protected $table = 'product_inquiries';
    
    protected $fillable = ['name', 'phone', 'email', 'address', 'status', 'message'];

    
    
    public function quantities()
    {
        return $this->hasMany(ProductQuantity::class);
    }

    public function singleProductImage($id = null)
    {
        // return $id;
        return $this->hasOne(ProductQuantity::class)->orderBy('created_at', 'asc');

        return $this->hasMany(ProductQuantity::class);
        return $this->hasOne(ProductQuantity::class)->with('products')->orderBy('created_at', 'asc');

    }

}
