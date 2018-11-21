<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveLectionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // TODO GATE AUTH
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
            'title' => ['required', 'min:6', 'max:255'],
            'text' => ['required']
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'Заголовок лекции',
            'text' => 'Текст лекции'
        ];
    }
}
