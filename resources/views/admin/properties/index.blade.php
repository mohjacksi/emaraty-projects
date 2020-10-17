@extends('layouts.admin')
@section('content')
@can('property_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.properties.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.property.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.property.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Property">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.property.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.propriety_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.contract_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.tenant_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.date_of_preview') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.estimate_reference') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.estimate_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_statement_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.damage_value_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.notes_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.accident_photos') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.name_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.dep_mang_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.property.fields.confidence') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($properties as $key => $property)
                        <tr data-entry-id="{{ $property->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $property->id ?? '' }}
                            </td>
                            <td>
                                {{ $property->propriety_name ?? '' }}
                            </td>
                            <td>
                                {{ $property->location ?? '' }}
                            </td>
                            <td>
                                {{ $property->contract_number ?? '' }}
                            </td>
                            <td>
                                {{ $property->tenant_name ?? '' }}
                            </td>
                            <td>
                                {{ $property->date_of_preview ?? '' }}
                            </td>
                            <td>
                                {{ $property->estimate_reference ?? '' }}
                            </td>
                            <td>
                                {{ $property->estimate_date ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_1 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_1 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_1 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_2 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_2 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_2 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_3 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_3 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_3 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_4 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_4 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_4 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_5 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_5 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_5 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_6 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_6 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_6 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_7 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_7 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_7 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_8 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_8 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_8 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_9 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_9 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_9 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_statement_10 ?? '' }}
                            </td>
                            <td>
                                {{ $property->damage_value_10 ?? '' }}
                            </td>
                            <td>
                                {{ $property->notes_10 ?? '' }}
                            </td>
                            <td>
                                @foreach($property->accident_photos as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $property->name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $property->dep_mang_1 ?? '' }}
                            </td>
                            <td>
                                {{ $property->name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $property->dep_mang_2 ?? '' }}
                            </td>
                            <td>
                                {{ $property->name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $property->dep_mang_3 ?? '' }}
                            </td>
                            <td>
                                {{ $property->name_4 ?? '' }}
                            </td>
                            <td>
                                {{ $property->dep_mang_4 ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $property->confidence ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $property->confidence ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('property_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.properties.show', $property->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('property_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.properties.edit', $property->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('property_delete')
                                    <form action="{{ route('admin.properties.destroy', $property->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('property_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.properties.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Property:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection