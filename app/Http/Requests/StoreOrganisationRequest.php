<?php

namespace App\Http\Requests;

use App\Models\Organisation;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOrganisationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('organisation_create');
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
