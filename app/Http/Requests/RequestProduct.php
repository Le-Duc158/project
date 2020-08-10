<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestProduct extends FormRequest
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
    //kiểm tra đầu vào
    public function rules()
    {
        return [
            'name' => 'required|unique:product|min:3|max:10',
            'img' => 'image|required',
            'cat_id' => 'required',
            'price' => 'required|numeric',
            'description' => 'required'
        ];
    }
    //thông báo lỗi khi nhập sai
    public function messages(){
        return
        [
            "name.unique"=>"Tên sản phẩm bị trùng",
            "name.required"=>"Nhập tên sản phẩm",
            "name.min"=>"Độ dài tên ít nhất 3 kí tự",
            "name.max"=>"Độ dài tên dài nhất 10 kí tự",
            "img.image"=>"Ảnh có định dạng:jepg,png,ipg,gif",
            "img.required"=>"Ảnh dell có",
            "cat_id.required"=>"Danh mục bị trống",
            "price.required"=>"Giá bị trống",
            "price.numeric"=>"Giá là số",
            "description.required"=>"Mô tả bị trống"
        ];
    }
}
