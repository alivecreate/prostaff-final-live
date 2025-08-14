<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMedia extends Model
{
    protected $table = 'social_media';
    use HasFactory;
    protected $fillable = [
        'content',
        'user_id',
        'facebook',
        'instagram',
        'twitter',
        'youtube',
        'vimeo',
        'youtube_embed',
        'linkedin',
        'pinterest',
        'skype',
        'whatsapp',
        'whatsapp_group',
        'map_embed',
        'facebook_embed',
    ];

}
