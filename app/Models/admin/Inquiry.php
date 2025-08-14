<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'phone', 'email', 'city', 'service', 'address', 'individualService', 'page_url', 'message', 'product_ids'];
    
}
