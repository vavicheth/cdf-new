<?php

namespace App\Http\Requests;

use App\Models\AppSeeting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreAppSeetingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('app_seeting_create');
    }

    public function rules()
    {
        return [
            'name'  => [
                'string',
                'required',
                'unique:app_seetings',
            ],
            'value' => [
                'string',
                'required',
            ],
        ];
    }
}
