@extends('layouts.admin')
@section('content')
@can('report_accident_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.report-accidents.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.reportAccident.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.reportAccident.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-ReportAccident">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.location') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.offender_id_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.car_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.issuer') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.date_of_accident') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_reference') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.estimate_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_5') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_6') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_7') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_8') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_9') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_statement_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.damage_value_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.notes_10') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.accident_photos') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_1') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_2') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_3') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.name_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.dep_mang_4') }}
                        </th>
                        <th>
                            {{ trans('cruds.reportAccident.fields.confidence') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($reportAccidents as $key => $reportAccident)
                        <tr data-entry-id="{{ $reportAccident->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $reportAccident->id ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->location ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->offender ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->offender_id_number ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->car_number ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->issuer ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->date_of_accident ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->accident_time ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->estimate_reference ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->estimate_date ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_1 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_1 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_1 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_2 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_2 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_2 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_3 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_3 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_3 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_4 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_4 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_4 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_5 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_5 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_5 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_6 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_6 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_6 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_7 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_7 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_7 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_8 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_8 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_8 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_9 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_9 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_9 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_statement_10 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->damage_value_10 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->notes_10 ?? '' }}
                            </td>
                            <td>
                                @foreach($reportAccident->accident_photos as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $reportAccident->name_1 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->dep_mang_1 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->name_2 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->dep_mang_2 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->name_3 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->dep_mang_3 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->name_4 ?? '' }}
                            </td>
                            <td>
                                {{ $reportAccident->dep_mang_4 ?? '' }}
                            </td>
                            <td>
                                <span style="display:none">{{ $reportAccident->confidence ?? '' }}</span>
                                <input type="checkbox" disabled="disabled" {{ $reportAccident->confidence ? 'checked' : '' }}>
                            </td>
                            <td>
                                @can('report_accident_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.report-accidents.show', $reportAccident->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('report_accident_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.report-accidents.edit', $reportAccident->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('report_accident_delete')
                                    <form action="{{ route('admin.report-accidents.destroy', $reportAccident->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('report_accident_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.report-accidents.massDestroy') }}",
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
  let table = $('.datatable-ReportAccident:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection