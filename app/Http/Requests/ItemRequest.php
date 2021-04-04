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
            // 'item-image'  => 'required|file|image',
            'take_time'   => 'required|integer|min:0|max:600',
            'capacity'    => 'required|integer|min:0|max:30000',
            'description' => 'nullable|string|max:1000',
        ];
    }
    public function attributes()
    {
        return [
            'title'       => 'タイトル',
            // 'item-image'  => '紹介画像',
            'take_time'   => '所要時間',
            'capacity'    => '受入可能人数',
            'description' => '内容',
        ];
    }
}
