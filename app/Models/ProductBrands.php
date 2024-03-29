<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductBrands extends Model
{
    use HasFactory;
    protected $table = 'product_brands';
    protected $fillable = [

        'name',
        'slug',
        'status',
        'product_category_id',



    ];

     // product category relationship with brand
     public function product_category()
     {
         // foreignkey //localkey
         // product belogs to a category
         return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
     }

     public function products()
    {
        // foreignkey //localkey
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }


}
