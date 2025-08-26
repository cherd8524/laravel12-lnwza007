<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $casts = [
        'published_at' => 'datetime',
        'content' => 'array',           // แปลง JSON เป็น array อัตโนมัติ
    ];
}
