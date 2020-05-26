<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class hoadonRequest extends FormRequest
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
            'gia' => 'required|min:1000|max:10000000',
            'ngaylaphoadon' => 'required',
            'diachigiaohang' => 'required',
            'ghichu' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'gia.required' => 'Gía bắt buộc',
            'ngaylaphoadon.required' => 'Ngày lập hóa đơn bắt buộc',
            'diachigiaohang.required' => 'Địa chỉ giao hàng bắt buộc',
            'ghichu.required' => 'Ghi chú bắt buộc',
        ];
    }
}