<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Church;

class CreateChurchRequest extends FormRequest
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
        return Church::$rules;
    }



    public function messages()
    {
        return [
            'name.required' => 'Missing required fiels "name" ',
            'name.string'  => 'Churh has to be  a string',
        ];
    }
}
