<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name_post' => 'required',
            'post_content' => 'required',
            'thumb' => 'required|image',
        ];
    }
    public function messages(): array
    {
        return [
            'name_post.required' => 'Tiêu đề bài viết không được để trống',
            'post_content.required' => 'Nội dung bài viết không được để trống',
            'thumb.required' => 'Hình ảnh không được để trống',
            'thumb.image' => 'Sai định dạng ảnh',
        ];
    }
}
