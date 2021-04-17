<?php

namespace App\Http\Requests;

use App\Models\AppSeeting;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAppSeetingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('app_seeting_edit');
    }

    public function rules()
    {
        return [
            'name'  => [
                'string',
                'required',
                'unique:app_seetings,name,' . request()->route('app_seeting')->id,
            ],
            'value' => [
                'string',
                'required',
            ],
        ];
    }
}
