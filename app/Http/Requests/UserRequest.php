<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    protected $rules = [
        'name'=> 'required|max:255',
        'email'=> 'required|max:255|email',
        'password'=>'required|max:255|min:8'
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
            $rules['email'] = $rules['email'].'|unique:users';
        }elseif(in_array($this->method(), ['PUT', 'PATCH'])){
            $rules['email'] = $rules['email'].'|unique:users,email,'.$this->route('user') ;
        }
        return $rules;
    }

    public function messages(){
        return [
            'name.required'=>'Name is required',
            'name.max'=>'Name must be less than 255 characters',
            'email.required'=>'Email is required',
            'email.unique'=>'This email already exists',
            'email.email'=>'Enter a valid email',
            'email.max'=>'Email must be less than 255 characters',
            'password.required'=>'Password is required',
            'password.max'=>'Password must be less than 255 characters',
            'password.min'=>'Password must be 8 or more characters',
        ];
    }
}
