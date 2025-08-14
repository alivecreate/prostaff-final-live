<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductQuantity extends Model
{
    use HasFactory;

    protected $table = 'inquiry_quantities';
    protected $fillable = ['product_inquiry_id','product_id', 'quantity'];

    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function productInquiry()
    {
        return $this->belongsTo(ProductInquiry::class);
    }
}
