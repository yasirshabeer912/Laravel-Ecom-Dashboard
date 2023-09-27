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
        $rules = [
                'name'=>[
                    'string',
                    'max:200'
                ],
                'product_slug'=>[
                    'required',
                    'string',
                    'max:200'
                ],
                'category_id'=>[
                    'required',
                    'integer'
                ],
                'description'=>[
                    'required'
                ],
                'image'=>[
                    'nullable',
                    'mimes:jpg,jpeg,png,svg',
                    
                ],
                'brand'=>[
                    'required',
                    'string',
                    'max:200'
                ],
                'short_description'=>[
                    'required',
                    'string'
                ],
                'keywords'=>[
                    'required',
                    'string'
                ],
                'uses'=>[
                    'required',
                    'string'
                ],
                'warranty'=>[
                    'nullable',
                    'string'
                ],
                'technical_specification'=>[
                    'required',
                    'string'
                ],
        ];
        return $rules;
}
}
