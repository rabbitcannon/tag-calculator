<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculateRequest extends FormRequest
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
            'first_amount' => 'required|numeric',
            'operator' => 'required|not_in:null',
            'second_amount' => 'required|numeric',
        ];
    }

    /**
     * @return string[]
     */
    public function messages() {
        return [
            'first_amount.required' => 'Please enter a first value.',
            'first_amount.numeric' => 'Please use numbers only.',
            'operator' => 'Please select an operator.',
            'operator.not_in' => 'Please select an operator.',
            'second_amount.required' => 'Please enter a second value.',
            'second_amount.numeric' => 'Please use numbers only.',
        ];
    }
}
