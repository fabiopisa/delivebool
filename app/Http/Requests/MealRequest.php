<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MealRequest extends FormRequest
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
            'name'=>'required|max:100',
            'description'=>'required|min:5',
            'price'=>'required|numeric',
            'available'=>'required'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Il nome è un campo obbligatorio',
            'description.required'=>'La descrizione è un campo obbligatorio',
            'address.min'=>'La descrizione è troppo corta',
            'name.max'=>'Il nome deve avere un massimo di :max caratteri',
            'price.required'=>'Il prezzzo è obbligatorio',
            'price.numeric'=>'non hai inserito un prezzo accettabile',
            'available.required'=>'La disponibilità è obbligatorio',
        ];
    }
}