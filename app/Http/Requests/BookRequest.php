<?php

namespace App\Http\Requests;

use Carbon\Carbon;
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
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'descriotion' => ['required', 'min:6'],
            'pages' => ['required', 'integer', 'digits_between:2,4'],
            'year' => ['required', 'digits:4', 'integer', 'min:1900', 'max:' . (date('Y'))]
        ];
    }
}
