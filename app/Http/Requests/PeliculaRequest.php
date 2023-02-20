<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PeliculaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'title' => 'required',
            'year' => 'required|numeric|min:1890|max:2023',
            'duration' => 'required|numeric|min:60|max:220',
            'director_id' => 'required|exists:directors,id'
        ];
    }



    public function messages()
    {
        return [
            'title.required' => 'El título es obligatorio',
            'year.min' => 'El año no puede ser anterior a 1890',
            //...
        ];
    }
}
