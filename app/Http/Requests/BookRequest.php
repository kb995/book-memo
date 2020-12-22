<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'cover' => 'file|image|mimes:jpeg,jpg,png,gif|max:2048',
            'isbn' => 'numeric|digits:13',
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'タイトル',
            'cover' => '表紙',
            'author' => '著者',
            'isbn' => 'ISBN',
            'description' => '詳細',
            'status' =>'状態',
            'rank' =>'評価',
            'read_at' =>'読了日',
        ];
    }
}
