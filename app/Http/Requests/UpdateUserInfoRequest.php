<?php

namespace App\Http\Requests;

use App\Models\UserInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserInfoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_info_edit');
    }

    public function rules()
    {
        return [
            'user_id' => [
                'required',
                'integer',
            ],
            'name_kh' => [
                'string',
                'nullable',
            ],
            'dob'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'phone'   => [
                'string',
                'nullable',
            ],
        ];
    }
}
