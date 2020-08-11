<?php

namespace App\Http\Requests;

use App\Rules\BlockEmail;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' => 'required|string|max:100',
            //'contEmail' => 'required|email',
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => 'required|max:20|min:8',
            'message' => 'required|string|max:2000'
        ];
    }
}
