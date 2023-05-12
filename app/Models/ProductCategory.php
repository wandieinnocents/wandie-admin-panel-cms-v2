<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

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

   // relationship between product category and products table

    public function products()
    {
        // foreignkey //localkey
        return $this->hasMany(Product::class, 'product_category_id', 'id');
    }

    


}
