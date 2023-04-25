<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStoreRequest extends FormRequest
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
            'lastname' => 'required|max:50',
            'phone' => 'required|regex:/^\+7\([0-9]{3}\)[0-9]{3}\-[0-9]{2}\-[0-9]{2}$/',
            'captcha' => 'required|captcha',
            'checkbox' => 'accepted',
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Поле :attribute не должно быть пустым',
            'regex' => 'Поле :attribute имеет неверный формат',
            'max' => [
                'numeric' => 'The :attribute must not be greater than :max.',
                'file' => 'The :attribute must not be greater than :max kilobytes.',
                'string' => 'Поле :attribute не должно быть более :max символов',
                'array' => 'The :attribute must not have more than :max items.',
            ],
            'captcha' => 'Неправильный ответ',
            'accepted' => 'Необходимо ваше согласие',
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'имя',
            'surname' => 'фамилия',
            'lastname' => 'отчество',
            'phone' => 'телефон',
        ];
    }
}
