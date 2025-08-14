<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $fillable = ['search_index', 'search_follow', 'canonical_url', 'meta_title',
     'meta_keyword', 'meta_description','seoable_id', 'seoable_type'];

    public function seoable()
    {
        return $this->morphTo();
    }
}
