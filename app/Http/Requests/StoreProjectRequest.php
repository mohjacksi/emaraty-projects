<?php

namespace App\Http\Requests;

use App\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_create');
    }

    public function rules()
    {
        return [
            'project_name'                => [
                'string',
                'max:50',
                'nullable',
            ],
            'project_reference'           => [
                'string',
                'nullable',
            ],
            'operating_permission_date'   => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'purchase_order'              => [
                'string',
                'nullable',
            ],
            'date_of_purchase'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'the_contractor'              => [
                'string',
                'max:50',
                'nullable',
            ],
            'date_of_delivery'            => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_commencement'        => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_reference'           => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'project_duration'            => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'assumed_date_of_receipt'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'completion_rate'             => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'initial_receipt_date'        => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'date_of_receipt_project'     => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'final_receipt_date'          => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'final_completion_percentage' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'delay_days'                  => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'work_done'                   => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'reserved_rate'               => [
                'string',
                'nullable',
            ],
        ];
    }
}
