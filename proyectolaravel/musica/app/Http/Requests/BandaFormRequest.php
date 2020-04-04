<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BandaFormRequest extends FormRequest
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
        'Nombre'=>'required|max:50',
        'Genero'=>'required|max:50',
        'Integrantes'=>'required', 
        'Id_factura'=>'required',
        'Correo'=>'required|max:70',
        'Telefono'=>'required|max:10'      
            //
        ];
    }
}
