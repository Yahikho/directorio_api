<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarDirectorioRequest extends FormRequest
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

            'nombre'    => 'required|min:3|max:100|unique:directorio,nombre,'.$this->route('directorio')->id,
            'telefono'  => 'nullable|numeric|regex:/^([0-9])*$/|not_in:0|min:99999|max:9999999999|unique:directorio,telefono,'.$this->route('directorio')->id,
            'email'     => 'nullable|email|min:5|max:100|unique:directorio,email,'.$this->route('directorio')->id,
            'direccion' => 'nullable|min:5|max:100,'.$this->route('directorio')->id
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
            'telefono.min'=>'El campo :attribute debe tener por lo menos 6 caracteres positivos',
            'telefono.max'=>'El campo :attribute debe tener maximo 10 caracteres'
        ];
        
    }
}
