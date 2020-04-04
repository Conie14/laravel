<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FacturaFormRequest extends FormRequest
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
            'No_contrato'=>'required',
            'Id_cliente'=>'required',
            'Id_banda'=>'required',
            'Importe'=>'required',
            'Fecha'=>'required',
            'Horas'=>'required',
        ];
    }
}
