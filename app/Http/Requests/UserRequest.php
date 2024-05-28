<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama'=> ' required|string',
            'email' => 'required|email',
            'telpon' => 'required|min:12',
            'foto' => 'required|mimes:png,jpg'
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'data harus di isikan',
            'email.required'=> 'email tidak boleh kosong ',
            'email.email' => 'pastikan yang dimasukan berupa email',
            'telpon.min' => 'minimal 12 digit',
            'foto.mimes' => 'Pastikan file yang diinput benar',
        ];
    }
}
