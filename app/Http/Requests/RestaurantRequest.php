<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestaurantRequest extends FormRequest
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
            'name'=>'required|max:50',
            'address'=>'required|max:80',
            'categories'=>'nullable|exists:categories,id'
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Il nome è un campo obbligatorio',
            'address.required'=>'L\'indirizzo è un campo obbligatorio',
            'address.max'=>'L\'indirizzo è troppo lungo',
            'name.max'=>'Il nome deve avere un massimo di :max caratteri',
            'tags.exists'=>'Nessun tag presente con questo valore',
        ];
    }
}