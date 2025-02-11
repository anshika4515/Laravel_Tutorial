<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use SebastianBergmann\Type\VoidType;

class FriendRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'username' => 'required',
            'age' => 'required|numeric',
            'city' =>'required'
        ];
    }
    // public function messages()
    // {
    //     return[ 
    //         'username.required' => 'Username is requireds',
    //         'age.required' => 'Age is required',
    //         'age.numeric' => 'age must number',
    //         'city.required' => 'city is must'
    //     ];
    // }
    public function attributes()     //attributes are shown according to us but messages are by default from laravel
    {
        return[
            'username' => 'USER NAME',
            'age' => 'AGE',
            'city' =>'CITY'
        ];
    }
    protected function prepareForValidation(): void  //after submiting form it chnges the data
    {
        $this->merge([
           'username' => strtoupper($this->username)
        ]);
    }

    protected $stopOnFirstFailure = true;  //show error one by one
}
