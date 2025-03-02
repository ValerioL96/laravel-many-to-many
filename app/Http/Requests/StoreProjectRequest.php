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
                "name"=>['required', 'min:2', 'max:255'],
                "language_used"=>['required', 'min:2', 'max:255'],
                "url_repo"=>['url', 'nullable'],
                'type_id' => ['required', 'exists:types,id'],
                'technologies' => ['required', 'array', 'exists:technologies,id'],
            ];
    }

    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array<string, string>
 */
public function messages(): array
{
    return [
        "name"=>'You must enter a valid name!',
        "language_used"=>'You must enter a valid language between 1 and 250 characters!',
        "url_repo"=>'You must enter a valid URL!',
        "type_id"=>'You must enter a valid Type!'
    ];
}
}
