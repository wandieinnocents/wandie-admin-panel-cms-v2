<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    protected $table = 'product_categories';
    protected $fillable = [

        'name', 
        'slug', 
        'description', 
        'image', 
        'meta_title', 
        'meta_keywords', 
        'meta_description', 
        'status', 
        

    ];
}
