<?php

namespace App\Http\Requests;

use App\Models\Title;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTitleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('title_edit');
    }

    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'name_kh' => [
                'string',
                'nullable',
            ],
            'abr'     => [
                'string',
                'nullable',
            ],
            'abr_kh'  => [
                'string',
                'nullable',
            ],
        ];
    }
}
