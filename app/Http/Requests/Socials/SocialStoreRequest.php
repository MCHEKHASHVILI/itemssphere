<?php

namespace App\Http\Requests\Socials;

use Illuminate\Foundation\Http\FormRequest;

class SocialStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => "required|string",
            'description' => "string",
            'user_id' => "numeric",
        ];
    }
}
