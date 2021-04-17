<?php

namespace App\Http\Requests;

use App\Models\Staff;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateStaffRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('staff_edit');
    }

    public function rules()
    {
        return [
            'staff_code'     => [
                'string',
                'required',
                'unique:staff,staff_code,' . request()->route('staff')->id,
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
