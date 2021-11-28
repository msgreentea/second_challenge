<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactRequest extends FormRequest
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


    // バリデーション前にデータを加工する
    protected function prepareForValidation()
    {
        $this->merge([
            'postcode' => mb_convert_kana($this->postcode, 'as'),
            // 'fullname' => $this->input('lastname') . '　' . $this->input('firstname')
        ]);
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'lastname' => 'required',
            'firstname' => 'required',
            'gender' => 'required',
            'email' => 'required | email:rfc,dns',
            'postcode' => 'required | max:8',
            'address' => 'required',
            'opinion' => 'required | max:120'
        ];
    }
}