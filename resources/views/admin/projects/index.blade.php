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
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Project">
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
                <tbody>
                    @foreach($projects as $key => $project)
                        <tr data-entry-id="{{ $project->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $project->id ?? '' }}
                            </td>
                            <td>
                                {{ $project->project_name ?? '' }}
                            </td>
                            <td>
                                {{ $project->project_reference ?? '' }}
                            </td>
                            <td>
                                {{ $project->operating_permission_date ?? '' }}
                            </td>
                            <td>
                                {{ $project->initial_project_value ?? '' }}
                            </td>
                            <td>
                                {{ $project->purchase_order ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_purchase ?? '' }}
                            </td>
                            <td>
                                {{ $project->the_contractor ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_delivery ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_commencement ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_reference ?? '' }}
                            </td>
                            <td>
                                {{ $project->project_duration ?? '' }}
                            </td>
                            <td>
                                {{ $project->assumed_date_of_receipt ?? '' }}
                            </td>
                            <td>
                                {{ App\Project::SAMPLES_APPROVAL_SELECT[$project->samples_approval] ?? '' }}
                            </td>
                            <td>
                                {{ $project->completion_rate ?? '' }}
                            </td>
                            <td>
                                {{ App\Project::CURRENT_BATCH_NUMBER_SELECT[$project->current_batch_number] ?? '' }}
                            </td>
                            <td>
                                {{ $project->current_payment_value ?? '' }}
                            </td>
                            <td>
                                {{ $project->initial_receipt_date ?? '' }}
                            </td>
                            <td>
                                {{ $project->date_of_receipt_project ?? '' }}
                            </td>
                            <td>
                                {{ $project->final_receipt_date ?? '' }}
                            </td>
                            <td>
                                {{ $project->final_completion_percentage ?? '' }}
                            </td>
                            <td>
                                {{ $project->delay_days ?? '' }}
                            </td>
                            <td>
                                {{ $project->justify_delay ?? '' }}
                            </td>
                            <td>
                                {{ $project->work_done ?? '' }}
                            </td>
                            <td>
                                {{ $project->pay_bef_end ?? '' }}
                            </td>
                            <td>
                                {{ $project->reserved_rate ?? '' }}
                            </td>
                            <td>
                                {{ $project->warranty ?? '' }}
                            </td>
                            <td>
                                {{ $project->final_payment ?? '' }}
                            </td>
                            <td>
                                {{ App\Project::PROJECT_STATE_SELECT[$project->project_state] ?? '' }}
                            </td>
                            <td>
                                {{ App\Project::DELIVERY_RECIPIENT_SELECT[$project->delivery_recipient] ?? '' }}
                            </td>
                            <td>
                                @foreach($project->attachments as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank">
                                        {{ trans('global.view_file') }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                @foreach($project->images as $key => $media)
                                    <a href="{{ $media->getUrl() }}" target="_blank" style="display: inline-block">
                                        <img src="{{ $media->getUrl('thumb') }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $project->notes ?? '' }}
                            </td>
                            <td>
                                {{ $project->created_at ?? '' }}
                            </td>
                            <td>
                                {{ $project->updated_at ?? '' }}
                            </td>
                            <td>
                                @can('project_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.projects.show', $project->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('project_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.projects.edit', $project->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('project_delete')
                                    <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('project_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.projects.massDestroy') }}",
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
  let table = $('.datatable-Project:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection