<?php

namespace App\Http\Requests;

use App\Models\UserInfo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyUserInfoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('user_info_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:user_infos,id',
        ];
    }
}
