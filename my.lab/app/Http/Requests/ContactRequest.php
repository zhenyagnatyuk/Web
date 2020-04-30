<?php

namespace App\Http\Requests;

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
        return[
			'name' => 'required|min:2|max:30',
			'email' => 'required|email'
		];
    }
	public function messages() {
		return [
			'name.required' => 'Поле Ім\'я є обов\'язковим!',
			'name.min' => 'Поле Ім\'я повинно складатися більше ніж з 2 символів!',
			'name.max' => 'Поле Ім\'я повинно складатися менше ніж з 30 символів!',
			'email.required' => 'Поле email є обов\'язковим!',
			'email.required' => 'email не валідний'
			
		];
	}
}
