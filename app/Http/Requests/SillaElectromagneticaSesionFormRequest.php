<?php

namespace sisVentasWeb\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SillaElectromagneticaSesionFormRequest extends FormRequest
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
            'idsillae_ciclo'=>'required',
            'fecha'=>'date',
            'tesla'=>'required',
            'minutos'=>'required|integer',
            'observaciones'=>'max:300'
        ];
    }
}
