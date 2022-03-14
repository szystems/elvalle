<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonaFormRequest extends FormRequest
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
            'tipo'=>'max:20',
            'nombre'=>'required|max:45',
            'tipo_documento'=>'max:45',
            'num_documento'=>'max:45',
            'direccion'=>'max:50',
            'telefono'=>'max:20',
            'email'=>'email|max:45|nullable',
            'banco'=>'max:45',
            'nombre_cuenta'=>'max:45',
            'numero_cuenta'=>'max:45',
        ];
    }
}
