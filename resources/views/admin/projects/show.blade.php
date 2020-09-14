@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.project.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.id') }}
                        </th>
                        <td>
                            {{ $project->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.project_name') }}
                        </th>
                        <td>
                            {{ $project->project_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.project_reference') }}
                        </th>
                        <td>
                            {{ $project->project_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.operating_permission_date') }}
                        </th>
                        <td>
                            {{ $project->operating_permission_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.initial_project_value') }}
                        </th>
                        <td>
                            {{ $project->initial_project_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.purchase_order') }}
                        </th>
                        <td>
                            {{ $project->purchase_order }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.date_of_purchase') }}
                        </th>
                        <td>
                            {{ $project->date_of_purchase }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.the_contractor') }}
                        </th>
                        <td>
                            {{ $project->the_contractor }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.date_of_delivery') }}
                        </th>
                        <td>
                            {{ $project->date_of_delivery }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.date_of_commencement') }}
                        </th>
                        <td>
                            {{ $project->date_of_commencement }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.date_of_reference') }}
                        </th>
                        <td>
                            {{ $project->date_of_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.project_duration') }}
                        </th>
                        <td>
                            {{ $project->project_duration }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.assumed_date_of_receipt') }}
                        </th>
                        <td>
                            {{ $project->assumed_date_of_receipt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.samples_approval') }}
                        </th>
                        <td>
                            {{ App\Project::SAMPLES_APPROVAL_SELECT[$project->samples_approval] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.completion_rate') }}
                        </th>
                        <td>
                            {{ $project->completion_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.current_batch_number') }}
                        </th>
                        <td>
                            {{ App\Project::CURRENT_BATCH_NUMBER_SELECT[$project->current_batch_number] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.current_payment_value') }}
                        </th>
                        <td>
                            {{ $project->current_payment_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.initial_receipt_date') }}
                        </th>
                        <td>
                            {{ $project->initial_receipt_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.date_of_receipt_project') }}
                        </th>
                        <td>
                            {{ $project->date_of_receipt_project }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.final_receipt_date') }}
                        </th>
                        <td>
                            {{ $project->final_receipt_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.final_completion_percentage') }}
                        </th>
                        <td>
                            {{ $project->final_completion_percentage }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.delay_days') }}
                        </th>
                        <td>
                            {{ $project->delay_days }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.justify_delay') }}
                        </th>
                        <td>
                            {{ $project->justify_delay }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.work_done') }}
                        </th>
                        <td>
                            {{ $project->work_done }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.pay_bef_end') }}
                        </th>
                        <td>
                            {{ $project->pay_bef_end }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.reserved_rate') }}
                        </th>
                        <td>
                            {{ $project->reserved_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.warranty') }}
                        </th>
                        <td>
                            {{ $project->warranty }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.final_payment') }}
                        </th>
                        <td>
                            {{ $project->final_payment }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.project_state') }}
                        </th>
                        <td>
                            {{ App\Project::PROJECT_STATE_SELECT[$project->project_state] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.delivery_recipient') }}
                        </th>
                        <td>
                            {{ App\Project::DELIVERY_RECIPIENT_SELECT[$project->delivery_recipient] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.attachments') }}
                        </th>
                        <td>
                            @foreach($project->attachments as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank">
                                    {{ trans('global.view_file') }}
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.images') }}
                        </th>
                        <td>
                            @foreach($project->images as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.project.fields.notes') }}
                        </th>
                        <td>
                            {{ $project->notes }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.projects.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection