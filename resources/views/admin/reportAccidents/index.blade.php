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
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-ReportAccident">
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
        </table>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('report_accident_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.report-accidents.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.report-accidents.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'location', name: 'location' },
{ data: 'offender', name: 'offender' },
{ data: 'offender_id_number', name: 'offender_id_number' },
{ data: 'car_number', name: 'car_number' },
{ data: 'issuer', name: 'issuer' },
{ data: 'date_of_accident', name: 'date_of_accident' },
{ data: 'accident_time', name: 'accident_time' },
{ data: 'estimate_reference', name: 'estimate_reference' },
{ data: 'estimate_date', name: 'estimate_date' },
{ data: 'damage_statement_1', name: 'damage_statement_1' },
{ data: 'damage_value_1', name: 'damage_value_1' },
{ data: 'notes_1', name: 'notes_1' },
{ data: 'damage_statement_2', name: 'damage_statement_2' },
{ data: 'damage_value_2', name: 'damage_value_2' },
{ data: 'notes_2', name: 'notes_2' },
{ data: 'damage_statement_3', name: 'damage_statement_3' },
{ data: 'damage_value_3', name: 'damage_value_3' },
{ data: 'notes_3', name: 'notes_3' },
{ data: 'damage_statement_4', name: 'damage_statement_4' },
{ data: 'damage_value_4', name: 'damage_value_4' },
{ data: 'notes_4', name: 'notes_4' },
{ data: 'damage_statement_5', name: 'damage_statement_5' },
{ data: 'damage_value_5', name: 'damage_value_5' },
{ data: 'notes_5', name: 'notes_5' },
{ data: 'damage_statement_6', name: 'damage_statement_6' },
{ data: 'damage_value_6', name: 'damage_value_6' },
{ data: 'notes_6', name: 'notes_6' },
{ data: 'damage_statement_7', name: 'damage_statement_7' },
{ data: 'damage_value_7', name: 'damage_value_7' },
{ data: 'notes_7', name: 'notes_7' },
{ data: 'damage_statement_8', name: 'damage_statement_8' },
{ data: 'damage_value_8', name: 'damage_value_8' },
{ data: 'notes_8', name: 'notes_8' },
{ data: 'damage_statement_9', name: 'damage_statement_9' },
{ data: 'damage_value_9', name: 'damage_value_9' },
{ data: 'notes_9', name: 'notes_9' },
{ data: 'damage_statement_10', name: 'damage_statement_10' },
{ data: 'damage_value_10', name: 'damage_value_10' },
{ data: 'notes_10', name: 'notes_10' },
{ data: 'accident_photos', name: 'accident_photos', sortable: false, searchable: false },
{ data: 'name_1', name: 'name_1' },
{ data: 'dep_mang_1', name: 'dep_mang_1' },
{ data: 'name_2', name: 'name_2' },
{ data: 'dep_mang_2', name: 'dep_mang_2' },
{ data: 'name_3', name: 'name_3' },
{ data: 'dep_mang_3', name: 'dep_mang_3' },
{ data: 'name_4', name: 'name_4' },
{ data: 'dep_mang_4', name: 'dep_mang_4' },
{ data: 'confidence', name: 'confidence' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-ReportAccident').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection