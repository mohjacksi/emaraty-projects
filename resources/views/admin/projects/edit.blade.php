@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.project.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.projects.update", [$project->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="project_name">{{ trans('cruds.project.fields.project_name') }}</label>
                <input class="form-control {{ $errors->has('project_name') ? 'is-invalid' : '' }}" type="text" name="project_name" id="project_name" value="{{ old('project_name', $project->project_name) }}">
                @if($errors->has('project_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.project_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_reference">{{ trans('cruds.project.fields.project_reference') }}</label>
                <input class="form-control {{ $errors->has('project_reference') ? 'is-invalid' : '' }}" type="text" name="project_reference" id="project_reference" value="{{ old('project_reference', $project->project_reference) }}">
                @if($errors->has('project_reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.project_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="operating_permission_date">{{ trans('cruds.project.fields.operating_permission_date') }}</label>
                <input class="form-control date {{ $errors->has('operating_permission_date') ? 'is-invalid' : '' }}" type="text" name="operating_permission_date" id="operating_permission_date" value="{{ old('operating_permission_date', $project->operating_permission_date) }}">
                @if($errors->has('operating_permission_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('operating_permission_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.operating_permission_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="initial_project_value">{{ trans('cruds.project.fields.initial_project_value') }}</label>
                <input class="form-control {{ $errors->has('initial_project_value') ? 'is-invalid' : '' }}" type="number" name="initial_project_value" id="initial_project_value" value="{{ old('initial_project_value', $project->initial_project_value) }}" step="0.01">
                @if($errors->has('initial_project_value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('initial_project_value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.initial_project_value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="purchase_order">{{ trans('cruds.project.fields.purchase_order') }}</label>
                <input class="form-control {{ $errors->has('purchase_order') ? 'is-invalid' : '' }}" type="text" name="purchase_order" id="purchase_order" value="{{ old('purchase_order', $project->purchase_order) }}">
                @if($errors->has('purchase_order'))
                    <div class="invalid-feedback">
                        {{ $errors->first('purchase_order') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.purchase_order_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_purchase">{{ trans('cruds.project.fields.date_of_purchase') }}</label>
                <input class="form-control date {{ $errors->has('date_of_purchase') ? 'is-invalid' : '' }}" type="text" name="date_of_purchase" id="date_of_purchase" value="{{ old('date_of_purchase', $project->date_of_purchase) }}">
                @if($errors->has('date_of_purchase'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_purchase') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_of_purchase_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="the_contractor">{{ trans('cruds.project.fields.the_contractor') }}</label>
                <input class="form-control {{ $errors->has('the_contractor') ? 'is-invalid' : '' }}" type="text" name="the_contractor" id="the_contractor" value="{{ old('the_contractor', $project->the_contractor) }}">
                @if($errors->has('the_contractor'))
                    <div class="invalid-feedback">
                        {{ $errors->first('the_contractor') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.the_contractor_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_delivery">{{ trans('cruds.project.fields.date_of_delivery') }}</label>
                <input class="form-control date {{ $errors->has('date_of_delivery') ? 'is-invalid' : '' }}" type="text" name="date_of_delivery" id="date_of_delivery" value="{{ old('date_of_delivery', $project->date_of_delivery) }}">
                @if($errors->has('date_of_delivery'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_delivery') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_of_delivery_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_commencement">{{ trans('cruds.project.fields.date_of_commencement') }}</label>
                <input class="form-control date {{ $errors->has('date_of_commencement') ? 'is-invalid' : '' }}" type="text" name="date_of_commencement" id="date_of_commencement" value="{{ old('date_of_commencement', $project->date_of_commencement) }}">
                @if($errors->has('date_of_commencement'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_commencement') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_of_commencement_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_reference">{{ trans('cruds.project.fields.date_of_reference') }}</label>
                <input class="form-control date {{ $errors->has('date_of_reference') ? 'is-invalid' : '' }}" type="text" name="date_of_reference" id="date_of_reference" value="{{ old('date_of_reference', $project->date_of_reference) }}">
                @if($errors->has('date_of_reference'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_reference') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_of_reference_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="project_duration">{{ trans('cruds.project.fields.project_duration') }}</label>
                <input class="form-control {{ $errors->has('project_duration') ? 'is-invalid' : '' }}" type="number" name="project_duration" id="project_duration" value="{{ old('project_duration', $project->project_duration) }}" step="1">
                @if($errors->has('project_duration'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_duration') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.project_duration_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="assumed_date_of_receipt">{{ trans('cruds.project.fields.assumed_date_of_receipt') }}</label>
                <input class="form-control date {{ $errors->has('assumed_date_of_receipt') ? 'is-invalid' : '' }}" type="text" name="assumed_date_of_receipt" id="assumed_date_of_receipt" value="{{ old('assumed_date_of_receipt', $project->assumed_date_of_receipt) }}">
                @if($errors->has('assumed_date_of_receipt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('assumed_date_of_receipt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.assumed_date_of_receipt_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.project.fields.samples_approval') }}</label>
                <select class="form-control {{ $errors->has('samples_approval') ? 'is-invalid' : '' }}" name="samples_approval" id="samples_approval">
                    <option value disabled {{ old('samples_approval', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Project::SAMPLES_APPROVAL_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('samples_approval', $project->samples_approval) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('samples_approval'))
                    <div class="invalid-feedback">
                        {{ $errors->first('samples_approval') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.samples_approval_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="completion_rate">{{ trans('cruds.project.fields.completion_rate') }}</label>
                <input class="form-control {{ $errors->has('completion_rate') ? 'is-invalid' : '' }}" type="number" name="completion_rate" id="completion_rate" value="{{ old('completion_rate', $project->completion_rate) }}" step="1">
                @if($errors->has('completion_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('completion_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.completion_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.project.fields.current_batch_number') }}</label>
                <select class="form-control {{ $errors->has('current_batch_number') ? 'is-invalid' : '' }}" name="current_batch_number" id="current_batch_number">
                    <option value disabled {{ old('current_batch_number', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Project::CURRENT_BATCH_NUMBER_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('current_batch_number', $project->current_batch_number) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('current_batch_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_batch_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.current_batch_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="current_payment_value">{{ trans('cruds.project.fields.current_payment_value') }}</label>
                <input class="form-control {{ $errors->has('current_payment_value') ? 'is-invalid' : '' }}" type="number" name="current_payment_value" id="current_payment_value" value="{{ old('current_payment_value', $project->current_payment_value) }}" step="0.01">
                @if($errors->has('current_payment_value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('current_payment_value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.current_payment_value_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="initial_receipt_date">{{ trans('cruds.project.fields.initial_receipt_date') }}</label>
                <input class="form-control date {{ $errors->has('initial_receipt_date') ? 'is-invalid' : '' }}" type="text" name="initial_receipt_date" id="initial_receipt_date" value="{{ old('initial_receipt_date', $project->initial_receipt_date) }}">
                @if($errors->has('initial_receipt_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('initial_receipt_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.initial_receipt_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="date_of_receipt_project">{{ trans('cruds.project.fields.date_of_receipt_project') }}</label>
                <input class="form-control date {{ $errors->has('date_of_receipt_project') ? 'is-invalid' : '' }}" type="text" name="date_of_receipt_project" id="date_of_receipt_project" value="{{ old('date_of_receipt_project', $project->date_of_receipt_project) }}">
                @if($errors->has('date_of_receipt_project'))
                    <div class="invalid-feedback">
                        {{ $errors->first('date_of_receipt_project') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.date_of_receipt_project_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="final_receipt_date">{{ trans('cruds.project.fields.final_receipt_date') }}</label>
                <input class="form-control date {{ $errors->has('final_receipt_date') ? 'is-invalid' : '' }}" type="text" name="final_receipt_date" id="final_receipt_date" value="{{ old('final_receipt_date', $project->final_receipt_date) }}">
                @if($errors->has('final_receipt_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_receipt_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.final_receipt_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="final_completion_percentage">{{ trans('cruds.project.fields.final_completion_percentage') }}</label>
                <input class="form-control {{ $errors->has('final_completion_percentage') ? 'is-invalid' : '' }}" type="number" name="final_completion_percentage" id="final_completion_percentage" value="{{ old('final_completion_percentage', $project->final_completion_percentage) }}" step="1">
                @if($errors->has('final_completion_percentage'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_completion_percentage') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.final_completion_percentage_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="delay_days">{{ trans('cruds.project.fields.delay_days') }}</label>
                <input class="form-control {{ $errors->has('delay_days') ? 'is-invalid' : '' }}" type="number" name="delay_days" id="delay_days" value="{{ old('delay_days', $project->delay_days) }}" step="1">
                @if($errors->has('delay_days'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delay_days') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.delay_days_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="justify_delay">{{ trans('cruds.project.fields.justify_delay') }}</label>
                <textarea class="form-control {{ $errors->has('justify_delay') ? 'is-invalid' : '' }}" name="justify_delay" id="justify_delay">{{ old('justify_delay', $project->justify_delay) }}</textarea>
                @if($errors->has('justify_delay'))
                    <div class="invalid-feedback">
                        {{ $errors->first('justify_delay') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.justify_delay_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="work_done">{{ trans('cruds.project.fields.work_done') }}</label>
                <input class="form-control {{ $errors->has('work_done') ? 'is-invalid' : '' }}" type="number" name="work_done" id="work_done" value="{{ old('work_done', $project->work_done) }}" step="1">
                @if($errors->has('work_done'))
                    <div class="invalid-feedback">
                        {{ $errors->first('work_done') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.work_done_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="pay_bef_end">{{ trans('cruds.project.fields.pay_bef_end') }}</label>
                <input class="form-control {{ $errors->has('pay_bef_end') ? 'is-invalid' : '' }}" type="number" name="pay_bef_end" id="pay_bef_end" value="{{ old('pay_bef_end', $project->pay_bef_end) }}" step="0.01">
                @if($errors->has('pay_bef_end'))
                    <div class="invalid-feedback">
                        {{ $errors->first('pay_bef_end') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.pay_bef_end_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="reserved_rate">{{ trans('cruds.project.fields.reserved_rate') }}</label>
                <input class="form-control {{ $errors->has('reserved_rate') ? 'is-invalid' : '' }}" type="text" name="reserved_rate" id="reserved_rate" value="{{ old('reserved_rate', $project->reserved_rate) }}">
                @if($errors->has('reserved_rate'))
                    <div class="invalid-feedback">
                        {{ $errors->first('reserved_rate') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.reserved_rate_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="warranty">{{ trans('cruds.project.fields.warranty') }}</label>
                <input class="form-control {{ $errors->has('warranty') ? 'is-invalid' : '' }}" type="number" name="warranty" id="warranty" value="{{ old('warranty', $project->warranty) }}" step="0.01">
                @if($errors->has('warranty'))
                    <div class="invalid-feedback">
                        {{ $errors->first('warranty') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.warranty_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="final_payment">{{ trans('cruds.project.fields.final_payment') }}</label>
                <input class="form-control {{ $errors->has('final_payment') ? 'is-invalid' : '' }}" type="number" name="final_payment" id="final_payment" value="{{ old('final_payment', $project->final_payment) }}" step="0.01">
                @if($errors->has('final_payment'))
                    <div class="invalid-feedback">
                        {{ $errors->first('final_payment') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.final_payment_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.project.fields.project_state') }}</label>
                <select class="form-control {{ $errors->has('project_state') ? 'is-invalid' : '' }}" name="project_state" id="project_state">
                    <option value disabled {{ old('project_state', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Project::PROJECT_STATE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('project_state', $project->project_state) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('project_state'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project_state') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.project_state_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.project.fields.delivery_recipient') }}</label>
                <select class="form-control {{ $errors->has('delivery_recipient') ? 'is-invalid' : '' }}" name="delivery_recipient" id="delivery_recipient">
                    <option value disabled {{ old('delivery_recipient', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Project::DELIVERY_RECIPIENT_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('delivery_recipient', $project->delivery_recipient) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('delivery_recipient'))
                    <div class="invalid-feedback">
                        {{ $errors->first('delivery_recipient') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.delivery_recipient_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="attachments">{{ trans('cruds.project.fields.attachments') }}</label>
                <div class="needsclick dropzone {{ $errors->has('attachments') ? 'is-invalid' : '' }}" id="attachments-dropzone">
                </div>
                @if($errors->has('attachments'))
                    <div class="invalid-feedback">
                        {{ $errors->first('attachments') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.attachments_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="images">{{ trans('cruds.project.fields.images') }}</label>
                <div class="needsclick dropzone {{ $errors->has('images') ? 'is-invalid' : '' }}" id="images-dropzone">
                </div>
                @if($errors->has('images'))
                    <div class="invalid-feedback">
                        {{ $errors->first('images') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.images_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.project.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes', $project->notes) }}</textarea>
                @if($errors->has('notes'))
                    <div class="invalid-feedback">
                        {{ $errors->first('notes') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.project.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    var uploadedAttachmentsMap = {}
Dropzone.options.attachmentsDropzone = {
    url: '{{ route('admin.projects.storeMedia') }}',
    maxFilesize: 50, // MB
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="attachments[]" value="' + response.name + '">')
      uploadedAttachmentsMap[file.name] = response.name
    },
    removedfile: function (file) {
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedAttachmentsMap[file.name]
      }
      $('form').find('input[name="attachments[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($project) && $project->attachments)
          var files =
            {!! json_encode($project->attachments) !!}
              for (var i in files) {
              var file = files[i]
              this.options.addedfile.call(this, file)
              file.previewElement.classList.add('dz-complete')
              $('form').append('<input type="hidden" name="attachments[]" value="' + file.file_name + '">')
            }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
<script>
    var uploadedImagesMap = {}
Dropzone.options.imagesDropzone = {
    url: '{{ route('admin.projects.storeMedia') }}',
    maxFilesize: 50, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 50,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
      uploadedImagesMap[file.name] = response.name
    },
    removedfile: function (file) {
      console.log(file)
      file.previewElement.remove()
      var name = ''
      if (typeof file.file_name !== 'undefined') {
        name = file.file_name
      } else {
        name = uploadedImagesMap[file.name]
      }
      $('form').find('input[name="images[]"][value="' + name + '"]').remove()
    },
    init: function () {
@if(isset($project) && $project->images)
      var files = {!! json_encode($project->images) !!}
          for (var i in files) {
          var file = files[i]
          this.options.addedfile.call(this, file)
          this.options.thumbnail.call(this, file, file.preview)
          file.previewElement.classList.add('dz-complete')
          $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
        }
@endif
    },
     error: function (file, response) {
         if ($.type(response) === 'string') {
             var message = response //dropzone sends it's own error messages in string
         } else {
             var message = response.errors.file
         }
         file.previewElement.classList.add('dz-error')
         _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
         _results = []
         for (_i = 0, _len = _ref.length; _i < _len; _i++) {
             node = _ref[_i]
             _results.push(node.textContent = message)
         }

         return _results
     }
}
</script>
@endsection