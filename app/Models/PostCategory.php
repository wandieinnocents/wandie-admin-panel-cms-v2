<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;

class PostCategory extends Model
{
    use HasFactory;
    protected $fillables = [
        'post_category_name',
        'post_category_description'

    ];

     // relationship
     public function post_r(){
        return $this->hasMany(Post::class);
    }
}
