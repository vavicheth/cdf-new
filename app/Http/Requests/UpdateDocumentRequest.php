<?php

namespace App\Http\Requests;

use App\Models\Document;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDocumentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('document_edit');
    }

    public function rules()
    {
        return [
            'letter_code'      => [
                'string',
                'nullable',
            ],
            'code_in'          => [
                'string',
                'nullable',
            ],
            'code_out'         => [
                'string',
                'nullable',
            ],
            'document_code'    => [
                'string',
                'nullable',
            ],
            'from_organisation'  => [
                'required',
                'string',
            ],
//            'organisation_id'  => [
//                'required',
//                'integer',
//            ],
            'users.*'          => [
                'integer',
            ],
            'users'            => [
                'array',
            ],
//            'document_type_id' => [
//                'required',
//                'integer',
//            ],
            'dateline'         => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_complete'    => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
        ];
    }
}
