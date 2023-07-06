<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTentangKamiRequest extends FormRequest
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
            'visi' => 'required|max:255',
            'misi1' => 'required|max:255',
            'misi2' => 'required|max:255',
            'misi3' => 'required|max:255',
            'fasilitas1' => 'required|max:255',
            'fasilitas2' => 'required|max:255',
            'fasilitas3' => 'required|max:255',
            'fasilitas4' => 'required|max:255',
            'fasilitas5' => 'required|max:255',
            'fasilitas6' => 'required|max:255',
            'image' => 'image|file|max:5120'
        ];
    }
}
