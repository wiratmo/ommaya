<?php

namespace App\Http\Requests\edit;

use Illuminate\Foundation\Http\FormRequest;

class EditAkunPost extends FormRequest
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
            'aid' => 'required',
            'kategori_id' => 'required|numeric',
            'keterangan'=> 'required'
        ];
    }
}
