<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'product_category_id' => [
                'required',
                'string'
            ],
            'name' => [
                'required',
                'string'
            ],
            'slug' => [
                'required',
                'string'
            ],
            'brand' => [
                'required',
                'string'
            ],
            'small_description' => [
                'required',
                'string'
            ],
            'description' => [
                'required',
                'string'
            ],
            'original_price' => [
                'required',
                'string'
            ],
            'selling_price' => [
                'required',
                'string'
            ],
            'quantity' => [
                'required',
                'string'
            ],
            'trending' => [
                'required',
                'string'
            ],
            'status' => [
                'required',
                'string'
            ],
            'meta_title' => [
                'required',
                'string'
            ],
            'meta_keywords' => [
                'required',
                'string'
            ],
            'meta_description' => [
                'required',
                'string'
            ],
            


        ];
    }
}
