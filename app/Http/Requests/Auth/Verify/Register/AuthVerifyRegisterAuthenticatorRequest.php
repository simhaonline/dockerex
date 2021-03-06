<?php

namespace App\Http\Requests\Auth\Verify\Register;

use Illuminate\Foundation\Http\FormRequest;

class AuthVerifyRegisterAuthenticatorRequest extends FormRequest
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
            'authenticator_code' => 'required|digits:6',
        ];
    }
}
