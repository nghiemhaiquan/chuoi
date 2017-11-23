<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SongRequest extends FormRequest
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
            'link' => 'required',
            'image_cover' => 'required|image',
            'description' => 'required',
            'lyric' => 'required',
            'genre_id' => 'required',
            'singer_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'link.required' => "Link field can't be blank",
            'image_cover.required' => "Image cover is required",
            'image_cover.image' => "Please select an image",
            'description.required' => "Description is required",
            'lyric.required' => "Lyric is required"
        ];
    }
}
