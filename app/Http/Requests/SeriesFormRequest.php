<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SeriesFormRequest extends FormRequest
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
          'nome' => ['required', 'min:3']
        ];
    }

    // public function messages() {
    // Podemos realizar dessa forma que não é o ideal, ou modificar no arquivo criando uma pasta en/pt-br
    //     return [
    //         'nome.required' => 'O campo nome é obrigatorio',
    //         'nome.min' => 'O campo precisa de no minimo :min caracteres',
    //     ];
    // }
}
