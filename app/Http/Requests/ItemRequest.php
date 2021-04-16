<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use function PHPSTORM_META\map;

class ItemRequest extends FormRequest
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
            'title'       => 'required|max:50',
            'tags'        => 'json|regex:/^(?!.*\s).+$/u|regex:/^(?!.*\/).*$/u',
            // 'item-image'  => 'required|file|image',
            'category'    => 'required|integer',
            'take_time'   => 'required|integer|min:0|max:600',
            'capacity'    => 'required|integer|min:0|max:30000',
            'description' => 'nullable|string|max:1000',
        ];
    }
    public function attributes()
    {
        return [
            'title'       => 'タイトル',
            'tags'        => 'タグ',
            // 'item-image'  => '紹介画像',
            'category'    => 'カテゴリー',
            'take_time'   => '所要時間',
            'capacity'    => '受入可能人数',
            'description' => '内容',
        ];
    }

    public function passedValidation()
    {
        $this->tags = collect(json_decode($this->tags))
            ->slice(0, 5)
            ->map(function ($requestTag) {
                return $requestTag->text;
            });
    }
}
