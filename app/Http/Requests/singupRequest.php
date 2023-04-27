<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class singupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules(): array
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
            //
        ];
    }

    public function messages()
    {
        return[
            'name.string'=>'Vui lòng nhập tên cho đúng',
            'age.numeric'=>'Vui lòng nhập tuổi cho đúng',
            'date.string'=>'Vui lòng nhập ngày tháng',
            'phone.numeric'=>'Vui lòng kiểm tra lại số điện thoại',
            'web.string'=>'Vui lòng kiểm tra lại tên web',
            'address.string'=>'Vui lòng nhập lại địa chỉ'
        ];
    }
}
