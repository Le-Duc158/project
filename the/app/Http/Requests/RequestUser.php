<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=>'required|email|unique:user,email',
            'name'=>'required',
            'password'=>'required|min:6|max:20',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|unique:user,phone',
            're_password'=>'required|same:password'
        ];
    }
    //thông báo lỗi khi nhập sai
    public function messages(){
        return
        [
            'email.required'=>'Please enter your email',
            'email.email'=>'Email invalidate',
            'email.unique'=>'Email already exists',
            'name.required'=>'Please enter your account name',
            'password.required'=>'Please enter a password',
            'phone.required' => 'Please enter the phone number',
            're_password.same'=>'The password is not the same',
            'password.min'=>'Password at least 6 characters',
            'password.max'=>'Password up to 20 characters'
        ];
    }
}
