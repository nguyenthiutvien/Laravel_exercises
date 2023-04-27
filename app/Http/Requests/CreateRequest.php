<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'roomname' => 'required|string|max:255',
            'des' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img' => 'required|string|max:255'
            //
        ];
    }
}
