<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LugarFormRequest extends FormRequest
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
        'Pais'=>'required|max:50',
        'Estado'=>'required|max:50',
        'Codigo_postal'=>'required',
        'Calle'=>'required|max:50',
        'Colonia'=>'required|max:70',
        'Id_banda'=>'required|max:50'

        ];
    }
}
