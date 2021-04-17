<?php

namespace App\Http\Requests;

use App\Models\Staff;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreStaffRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('staff_create');
    }

    public function rules()
    {
        return [
            'staff_code'     => [
                'string',
                'required',
                'unique:staff',
            ],
            'name'           => [
                'string',
                'required',
            ],
            'name_kh'        => [
                'string',
                'required',
            ],
            'dob'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'phone'          => [
                'string',
                'nullable',
            ],
            'staff_position' => [
                'string',
                'nullable',
            ],
        ];
    }
}
