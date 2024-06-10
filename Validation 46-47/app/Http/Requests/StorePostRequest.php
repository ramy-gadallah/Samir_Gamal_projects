<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            
                'title'=>'required|unique:posts',
                'body'=>'required'
            
        ];
    }

    public function messages()
    {
        return [
            'title.required'=> __('message.title must be required'),
            'title.unique'=>__('message. must be unique'),
            'body.required'=>__('message. body must be required')
        ];
    }
}
