<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PostCategory;

class Post extends Model
{
    use HasFactory;
    protected $fillables = [
        'post_category_id',
        'post_title',
        'post_photo',
        'post_description'
    ];

    // relationship
    public function post_category_r(){
      
        return $this->belongsTo(PostCategory::class,'post_category_id');
  }
}
