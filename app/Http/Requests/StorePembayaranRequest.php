<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePembayaranRequest extends FormRequest
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
            'id_petugas' => 'required|exists:petugases,id_petugas',
            'nisn' => 'required|exists:siswas,nisn',
            'tgl_bayar' => 'required|date',
            'bulan_dibayar' => 'required|string|max:255',
            'tahun_dibayar' => 'required|string|max:255',
            'id_spp' => 'required|exists:spps,id_spp',
            'jumlah_bayar' => 'required|numeric',
        ];
    }
}
