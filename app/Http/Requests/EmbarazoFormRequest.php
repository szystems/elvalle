<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmbarazoFormRequest extends FormRequest
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
            'idpaciente'=>'required',
            'iddoctor'=>'required',
            'idusuario'=>'required',
            'fur'=>'required|date',
            'trimestre1'=>'max:1000',
            'trimestre2'=>'max:1000',
            'trimestre3'=>'max:1000'
        ];
    }
}
