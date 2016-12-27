<?php

namespace App\Http\Requests\add;

use Illuminate\Foundation\Http\FormRequest;

class AddTransaksiPost extends FormRequest
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
    public function rules()
    {
        return [
            'transaksi_id' => "required|numeric",
            'keterangan' => "required",
            'debet' => "numeric",
            'kredit' => "numeric"
        ];
    }
}
