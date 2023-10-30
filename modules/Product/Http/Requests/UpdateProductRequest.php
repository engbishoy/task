<?php

namespace Modules\Product\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id', 
            'photo' => 'nullable|image',  
        ];
    }
    
        public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'category_id.required' => 'The category field is required.',
            'photo.required' => 'The photo is required.'

        ];
    }


    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
