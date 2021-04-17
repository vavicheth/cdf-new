<?php

namespace App\Http\Requests;

use App\Models\Position;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePositionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('position_create');
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
        ];
    }
}
