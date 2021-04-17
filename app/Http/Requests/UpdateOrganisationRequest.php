<?php

namespace App\Http\Requests;

use App\Models\Organisation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateOrganisationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('organisation_edit');
    }

    public function rules()
    {
        return [
            'name'    => [
                'string',
                'required',
            ],
            'phone'   => [
                'string',
                'nullable',
            ],
            'address' => [
                'string',
                'nullable',
            ],
        ];
    }
}
