<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductCategory;
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

    // product category relationshiop
    public function product_category()
    {
        // foreignkey //localkey
        // product belogs to a category
        return $this->belongsTo(ProductCategory::class, 'product_category_id', 'id');
    }
}
