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
            'nombre' => 'required|min:5|max:30|unique:directorio,nombre',
            'telefono' => 'min:5|max:30|unique:directorio,telefono',
            'email' => 'email|min:5|max:30|unique:directorio,email',
            'direccion' => 'min:5|max:30|unique:directorio,nombre'
        ];
    }
}
