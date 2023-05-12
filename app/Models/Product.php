<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
use App\Models\ProductBrands;
class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'product_category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'original_price',
        'selling_price',
        'quantity',
        'trending',
        'status',
        'meta_title',
        'meta_keywords',
        'meta_description',




    ];

    // product category relationship
    public function product_category()
    {
        // foreignkey //localkey
        // product belogs to a category
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }

    // public function product_brand()
    // {
    //     // foreignkey //localkey
    //     // product belogs to a brand
    //     return $this->belongsTo(ProductBrands::class, 'product_category_id', 'id');
    // }
}
