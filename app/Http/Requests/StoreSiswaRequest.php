<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiswaRequest extends FormRequest
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
            'nisn' => 'required',
            'nis' => 'required',
            'nama' => 'required|max:35',
            'id_kelas' => 'required|exists:kelases,id_kelas',
            'alamat' => 'required',
            'no_telp' => 'required|numeric|digits_between:10,13',
            'id_spp' => 'required|exists:spps,id_spp',
        ];
    }
}
