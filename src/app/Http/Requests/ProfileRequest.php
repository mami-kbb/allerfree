<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'profile_image' => ['mimes:jpeg,png'],
            'name' => ['required', 'max:20'],
        ];
    }

    public function messages()
        {
            return [
                'profile_image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください',
                'name.required' => 'ユーザー名を入力してください',
                'name.max' => 'ユーザー名は20文字以内で入力してください',
            ];
        }
}
