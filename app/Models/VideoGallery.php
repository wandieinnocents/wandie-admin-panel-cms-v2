<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoGallery extends Model
{
    use HasFactory;
    protected $fillables = [
        'video_title',
        'video_url',
        'video_description',
        'video_thumbnail'
    ];
}
