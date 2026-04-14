<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'image' => ['required', 'image', 'mimes:jpeg,png'],
            'allergy_recipe' => ['required', 'array'],
            'allergy_recipe.*' => ['exists:allergies,id'],
            'ingredients.0' => ['required','array', 'min:1'],
            'ingredients.*' => ['required', 'string'],
            'quantities.0' => ['required', 'array', 'min:1'],
            'quantities.*' => ['required', 'string'],
            'steps.0' => ['required', 'array', 'min:1'],
            'steps.*'=> ['required', 'string'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'レシピ名を入力してください',
            'image.required' => 'レシピ画像を選択してください',
            'image.mimes' => '「.png」または「.jpeg」形式でアップロードしてください',
            'allergy_recipe.required' => 'レシピのアレルギーを選択してください',
            'ingredients.0.required' => '材料を１つ以上入力してください',
            'quantities.0.required' => '分量を入力してください',
            'steps.0.required' => '手順を１つ以上入力してください',
        ];
    }

    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $ingredients = $this->ingredients ?? [];
            $quantities = $this->quantities ?? [];

            foreach ($ingredients as $index => $ingredient) {
                $quantity = $quantities[$index] ?? null;

                if ($ingredient && !$quantity) {
                    $validator->errors()->add("quantities.$index", '分量を入力してください');
                }

                if (!$ingredient && $quantity) {
                    $validator->errors()->add("ingredients.$index", '材料を入力してください');
                }
            }
        });
    }
}
