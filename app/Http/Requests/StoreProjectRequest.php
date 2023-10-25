<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'thumb' => 'required|image',
            'name_project' => 'required|min:5',
            'price' => 'required|gt:0',
            'content' => 'required',
            'location' => 'required',
            'convince' => 'required',
            'decor' => 'required',
            'payment' => 'required',
            'place' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name_project.required' => 'Tiêu đề bài viết không được để trống',
            'content.required' => 'Nội dung bài viết không được để trống',
            'price.required' => 'Giá trị không được để trống',
            'price.gt' => 'Giá trị phải lớn hơn 0',
            'location.required' => 'Vị trí dự án không được để trống',
            'convince.required' => 'Tiện ích dự án không được để trống',
            'decor.required' => 'Nội thất dự án không được để trống',
            'payment.required' => 'Tiến độ dự án không được để trống',
            'place.required' => 'Mặt bằng dự án không được để trống',
            'thumb.required' => 'Hình ảnh không được để trống',
            'thumb.image' => 'Sai định dạng ảnh',
        ];
    }
}
