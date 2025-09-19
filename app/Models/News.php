<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'news_type',
        'title',
        'description',
        'published_at',
        'topic_image_url',
        'content',
        'reference_url',
        'delPost',
    ];
    
    protected $casts = [
        'published_at' => 'datetime',
        'delPost' => 'boolean',
    ];
}
