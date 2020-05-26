<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class sanphamRequest extends FormRequest
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
            'ten' => 'required',
            'anh' =>  'required',
            'gia' => 'required|min:1000|max:10000000',
            'soluong' => 'required|min:1|max:1000',
        ];
    }
    public function messages()
    {
        return [
            'ten.required' => 'Email bắt buộc',
            'anh.required' => 'Số điện thoại bắt buộc',
            'gia.required' => 'Địa chỉ bắt buộc',
            'soluong.required' => 'Số lưpựng bắt buộc nhập',
        ];
    }
}