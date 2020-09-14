@extends('layouts.admin')
@section('content')
@can('project_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.projects.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.project.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.project.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Project">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.project.fields.id') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.project_name') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.project_reference') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.operating_permission_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.initial_project_value') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.purchase_order') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.date_of_purchase') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.the_contractor') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.date_of_delivery') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.date_of_commencement') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.date_of_reference') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.project_duration') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.assumed_date_of_receipt') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.samples_approval') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.completion_rate') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.current_batch_number') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.current_payment_value') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.initial_receipt_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.date_of_receipt_project') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.final_receipt_date') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.final_completion_percentage') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.delay_days') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.justify_delay') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.work_done') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.pay_bef_end') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.reserved_rate') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.warranty') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.final_payment') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.project_state') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.delivery_recipient') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.attachments') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.images') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.notes') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.created_at') }}
                    </th>
                    <th>
                        {{ trans('cruds.project.fields.updated_at') }}
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
@can('project_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.projects.massDestroy') }}",
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
    ajax: "{{ route('admin.projects.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'id', name: 'id' },
{ data: 'project_name', name: 'project_name' },
{ data: 'project_reference', name: 'project_reference' },
{ data: 'operating_permission_date', name: 'operating_permission_date' },
{ data: 'initial_project_value', name: 'initial_project_value' },
{ data: 'purchase_order', name: 'purchase_order' },
{ data: 'date_of_purchase', name: 'date_of_purchase' },
{ data: 'the_contractor', name: 'the_contractor' },
{ data: 'date_of_delivery', name: 'date_of_delivery' },
{ data: 'date_of_commencement', name: 'date_of_commencement' },
{ data: 'date_of_reference', name: 'date_of_reference' },
{ data: 'project_duration', name: 'project_duration' },
{ data: 'assumed_date_of_receipt', name: 'assumed_date_of_receipt' },
{ data: 'samples_approval', name: 'samples_approval' },
{ data: 'completion_rate', name: 'completion_rate' },
{ data: 'current_batch_number', name: 'current_batch_number' },
{ data: 'current_payment_value', name: 'current_payment_value' },
{ data: 'initial_receipt_date', name: 'initial_receipt_date' },
{ data: 'date_of_receipt_project', name: 'date_of_receipt_project' },
{ data: 'final_receipt_date', name: 'final_receipt_date' },
{ data: 'final_completion_percentage', name: 'final_completion_percentage' },
{ data: 'delay_days', name: 'delay_days' },
{ data: 'justify_delay', name: 'justify_delay' },
{ data: 'work_done', name: 'work_done' },
{ data: 'pay_bef_end', name: 'pay_bef_end' },
{ data: 'reserved_rate', name: 'reserved_rate' },
{ data: 'warranty', name: 'warranty' },
{ data: 'final_payment', name: 'final_payment' },
{ data: 'project_state', name: 'project_state' },
{ data: 'delivery_recipient', name: 'delivery_recipient' },
{ data: 'attachments', name: 'attachments', sortable: false, searchable: false },
{ data: 'images', name: 'images', sortable: false, searchable: false },
{ data: 'notes', name: 'notes' },
{ data: 'created_at', name: 'created_at' },
{ data: 'updated_at', name: 'updated_at' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-Project').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection