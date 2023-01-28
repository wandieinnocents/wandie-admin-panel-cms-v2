<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductBrands extends Model
{
    use HasFactory;
    protected $table = 'product_brands';
    protected $fillable = [

        'name', 
        'slug', 
        'status', 
       
    

    ];
}
