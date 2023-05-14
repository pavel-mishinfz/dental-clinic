<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewStoreRequest extends FormRequest
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
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'review' => 'required',
            'captcha' => 'required|captcha',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не должно быть пустым',
            'max' => [
                'numeric' => 'The :attribute must not be greater than :max.',
                'file' => 'The :attribute must not be greater than :max kilobytes.',
                'string' => 'Поле :attribute не должно быть более :max символов',
                'array' => 'The :attribute must not have more than :max items.',
            ],
            'captcha' => 'Неправильный ответ',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'surname' => 'фамилия',
            'review' => 'отзыв',
        ];
    }
}
