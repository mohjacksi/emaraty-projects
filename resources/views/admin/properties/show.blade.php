@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.property.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.properties.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.id') }}
                        </th>
                        <td>
                            {{ $property->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.propriety_name') }}
                        </th>
                        <td>
                            {{ $property->propriety_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.location') }}
                        </th>
                        <td>
                            {{ $property->location }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.contract_number') }}
                        </th>
                        <td>
                            {{ $property->contract_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.tenant_name') }}
                        </th>
                        <td>
                            {{ $property->tenant_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.date_of_preview') }}
                        </th>
                        <td>
                            {{ $property->date_of_preview }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.estimate_reference') }}
                        </th>
                        <td>
                            {{ $property->estimate_reference }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.estimate_date') }}
                        </th>
                        <td>
                            {{ $property->estimate_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_1') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_1') }}
                        </th>
                        <td>
                            {{ $property->damage_value_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_1') }}
                        </th>
                        <td>
                            {{ $property->notes_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_2') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_2') }}
                        </th>
                        <td>
                            {{ $property->damage_value_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_2') }}
                        </th>
                        <td>
                            {{ $property->notes_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_3') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_3') }}
                        </th>
                        <td>
                            {{ $property->damage_value_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_3') }}
                        </th>
                        <td>
                            {{ $property->notes_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_4') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_4') }}
                        </th>
                        <td>
                            {{ $property->damage_value_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_4') }}
                        </th>
                        <td>
                            {{ $property->notes_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_5') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_5') }}
                        </th>
                        <td>
                            {{ $property->damage_value_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_5') }}
                        </th>
                        <td>
                            {{ $property->notes_5 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_6') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_6') }}
                        </th>
                        <td>
                            {{ $property->damage_value_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_6') }}
                        </th>
                        <td>
                            {{ $property->notes_6 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_7') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_7') }}
                        </th>
                        <td>
                            {{ $property->damage_value_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_7') }}
                        </th>
                        <td>
                            {{ $property->notes_7 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_8') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_8') }}
                        </th>
                        <td>
                            {{ $property->damage_value_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_8') }}
                        </th>
                        <td>
                            {{ $property->notes_8 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_9') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_9') }}
                        </th>
                        <td>
                            {{ $property->damage_value_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_9') }}
                        </th>
                        <td>
                            {{ $property->notes_9 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_10') }}
                        </th>
                        <td>
                            {{ $property->damage_statement_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_10') }}
                        </th>
                        <td>
                            {{ $property->damage_value_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.notes_10') }}
                        </th>
                        <td>
                            {{ $property->notes_10 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.accident_photos') }}
                        </th>
                        <td>
                            @foreach($property->accident_photos as $key => $media)
                                <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $media->getUrl('thumb') }}">
                                </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.name_1') }}
                        </th>
                        <td>
                            {{ $property->name_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_1') }}
                        </th>
                        <td>
                            {{ $property->dep_mang_1 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.name_2') }}
                        </th>
                        <td>
                            {{ $property->name_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_2') }}
                        </th>
                        <td>
                            {{ $property->dep_mang_2 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.name_3') }}
                        </th>
                        <td>
                            {{ $property->name_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_3') }}
                        </th>
                        <td>
                            {{ $property->dep_mang_3 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.name_4') }}
                        </th>
                        <td>
                            {{ $property->name_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_4') }}
                        </th>
                        <td>
                            {{ $property->dep_mang_4 }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.property.fields.confidence') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $property->confidence ? 'checked' : '' }}>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.properties.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection