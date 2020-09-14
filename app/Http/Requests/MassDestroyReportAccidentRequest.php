<?php

namespace App\Http\Requests;

use App\ReportAccident;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyReportAccidentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('report_accident_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:report_accidents,id',
        ];
    }
}
