<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CrearDirectorioRequest extends FormRequest
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
            'nombre'    => 'required|min:2|max:100|unique:directorio,nombre',
            'telefono'  => 'nullable|numeric|regex:/^([0-9])*$/|not_in:0|min:99999|max:9999999999|not_in:0|unique:directorio,telefono',
            'email'     => 'nullable|email|min:5|max:100|unique:directorio,email',
            'direccion' => 'nullable|min:5|max:100'
        ];
    }

    public function attributes()
    {
        return [
            
        ];
    }

    public function messages()
    {
        return [
            'telefono.min'=>'El campo :attribute de tener por lo menos 6 caracteres',
            'telefono.max'=>'El campo :attribute de tener maximo 10 caracteres'
        ];
        
    }
}
