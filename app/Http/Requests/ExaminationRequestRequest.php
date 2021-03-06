<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Contracts\Validation\Validator;

class ExaminationRequestRequest extends Request
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
            'service'   =>  'required'
        ];
    }

    public function messages()
    {
        return [
            'service.required'     =>  'Service is required.',
        ];
    }

    protected function formatErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }
}
