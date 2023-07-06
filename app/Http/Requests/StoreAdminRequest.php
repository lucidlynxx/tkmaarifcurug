<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdminRequest extends FormRequest
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
            'username' => 'required|min:3|max:255|unique:users',
            'password' => 'required|min:5|max:255',
            'alamat' => 'required|max:255',
            'noTelepon' => 'required|numeric|digits:12',
            'jenisKelamin' => 'required',
        ];
    }
}
