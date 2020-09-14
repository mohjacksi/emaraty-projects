@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.reportAccident.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.report-accidents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.id') }}
                        </th>
                        <td>
                            {{ $reportAccident->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.location') }}
                        </th>
                        <td>
                            {{ $reportAccident->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender') }}
                        </th>
                        <td>
                            {{ $reportAccident->offender }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender_id_number') }}
                        </th>
                        <td>
                            {{ $reportAccident->offender_id_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.car_number') }}
                        </th>
                        <td>
                            {{ $reportAccident->car_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.issuer') }}
                        </th>
                        <td>
                            {{ $reportAccident->issuer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.date_of_accident') }}
                        </th>
                        <td>
                            {{ $reportAccident->date_of_accident }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_time') }}
                        </th>
                        <td>
                            {{ $reportAccident->accident_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_reference') }}
                        </th>
                        <td>
                            {{ $reportAccident->estimate_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_date') }}
                        </th>
                        <td>
                            {{ $reportAccident->estimate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_1') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_1') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_1') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_2') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_2') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_2') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_3') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_3') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_3') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_4') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_4') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_4') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_5') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_5') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_5') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_6') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_6') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_6') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_7') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_7') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_7') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_8') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_8') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_8') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_9') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_9') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_9') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_10') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_statement_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_10') }}
                        </th>
                        <td>
                            {{ $reportAccident->damage_value_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_10') }}
                        </th>
                        <td>
                            {{ $reportAccident->notes_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_photos') }}
                        </th>
                        <td>
                            @foreach($reportAccident->accident_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_1') }}
                        </th>
                        <td>
                            {{ $reportAccident->name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_1') }}
                        </th>
                        <td>
                            {{ $reportAccident->dep_mang_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_2') }}
                        </th>
                        <td>
                            {{ $reportAccident->name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_2') }}
                        </th>
                        <td>
                            {{ $reportAccident->dep_mang_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_3') }}
                        </th>
                        <td>
                            {{ $reportAccident->name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_3') }}
                        </th>
                        <td>
                            {{ $reportAccident->dep_mang_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_4') }}
                        </th>
                        <td>
                            {{ $reportAccident->name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_4') }}
                        </th>
                        <td>
                            {{ $reportAccident->dep_mang_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.reportAccident.fields.confidence') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $reportAccident->confidence ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.report-accidents.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection