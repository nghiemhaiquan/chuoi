<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlbumRequest extends FormRequest
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
            'name' => 'required|max:25',
            'description' => 'required',
            'image_cover' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "Name field can't be blank",
            'name.max' => "Name is too long",
            'description.required' => "Description is required",
            'image_cover.required' => "Image cover is required",
            'image_cover.image' => "Please select an image"
        ];
    }
}
