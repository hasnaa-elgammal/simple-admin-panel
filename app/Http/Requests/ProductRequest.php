<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    protected $rules = [
        'name'=> 'required|max:255',
        'price'=> 'required|numeric',
        'image' => 'image|mimes:png,jpg,jpeg,gif',
        'details'=>'required|max:1000'
    ];
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
        $rules = $this->rules;
        if($this->isMethod('POST')){
            $rules['image'] = 'required|'. $rules['image'];
        }
        return $rules;
    }

    public function messages(){
        return [
            'name.required'=>'Name is required',
            'name.max'=>'Name must be less than 255 characters',
            'price.required'=>'Price is required',
            'price.numeric'=>'Pmail must be a number',
            'image.required'=>'Image is required',
            'image.image'=>'The file must be an image',
            'image.mimes'=>'The file must be jpg, png or gif',
            'details.required'=>'Details are required',
            'details.max'=>'Details must be less than 1000 characters',
        ];
    }
}
