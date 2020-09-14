<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyProjectRequest;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Project;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class ProjectsController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('project_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Project::query()->select(sprintf('%s.*', (new Project)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'project_show';
                $editGate      = 'project_edit';
                $deleteGate    = 'project_delete';
                $crudRoutePart = 'projects';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->editColumn('project_name', function ($row) {
                return $row->project_name ? $row->project_name : "";
            });
            $table->editColumn('project_reference', function ($row) {
                return $row->project_reference ? $row->project_reference : "";
            });

            $table->editColumn('initial_project_value', function ($row) {
                return $row->initial_project_value ? $row->initial_project_value : "";
            });
            $table->editColumn('purchase_order', function ($row) {
                return $row->purchase_order ? $row->purchase_order : "";
            });

            $table->editColumn('the_contractor', function ($row) {
                return $row->the_contractor ? $row->the_contractor : "";
            });

            $table->editColumn('project_duration', function ($row) {
                return $row->project_duration ? $row->project_duration : "";
            });

            $table->editColumn('samples_approval', function ($row) {
                return $row->samples_approval ? Project::SAMPLES_APPROVAL_SELECT[$row->samples_approval] : '';
            });
            $table->editColumn('completion_rate', function ($row) {
                return $row->completion_rate ? $row->completion_rate : "";
            });
            $table->editColumn('current_batch_number', function ($row) {
                return $row->current_batch_number ? Project::CURRENT_BATCH_NUMBER_SELECT[$row->current_batch_number] : '';
            });
            $table->editColumn('current_payment_value', function ($row) {
                return $row->current_payment_value ? $row->current_payment_value : "";
            });

            $table->editColumn('final_completion_percentage', function ($row) {
                return $row->final_completion_percentage ? $row->final_completion_percentage : "";
            });
            $table->editColumn('delay_days', function ($row) {
                return $row->delay_days ? $row->delay_days : "";
            });
            $table->editColumn('justify_delay', function ($row) {
                return $row->justify_delay ? $row->justify_delay : "";
            });
            $table->editColumn('work_done', function ($row) {
                return $row->work_done ? $row->work_done : "";
            });
            $table->editColumn('pay_bef_end', function ($row) {
                return $row->pay_bef_end ? $row->pay_bef_end : "";
            });
            $table->editColumn('reserved_rate', function ($row) {
                return $row->reserved_rate ? $row->reserved_rate : "";
            });
            $table->editColumn('warranty', function ($row) {
                return $row->warranty ? $row->warranty : "";
            });
            $table->editColumn('final_payment', function ($row) {
                return $row->final_payment ? $row->final_payment : "";
            });
            $table->editColumn('project_state', function ($row) {
                return $row->project_state ? Project::PROJECT_STATE_SELECT[$row->project_state] : '';
            });
            $table->editColumn('delivery_recipient', function ($row) {
                return $row->delivery_recipient ? Project::DELIVERY_RECIPIENT_SELECT[$row->delivery_recipient] : '';
            });
            $table->editColumn('attachments', function ($row) {
                if (!$row->attachments) {
                    return '';
                }

                $links = [];

                foreach ($row->attachments as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank">' . trans('global.downloadFile') . '</a>';
                }

                return implode(', ', $links);
            });
            $table->editColumn('images', function ($row) {
                if (!$row->images) {
                    return '';
                }

                $links = [];

                foreach ($row->images as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });
            $table->editColumn('notes', function ($row) {
                return $row->notes ? $row->notes : "";
            });

            $table->rawColumns(['actions', 'placeholder', 'attachments', 'images']);

            return $table->make(true);
        }

        return view('admin.projects.index');
    }

    public function create()
    {
        abort_if(Gate::denies('project_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projects.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $project = Project::create($request->all());

        foreach ($request->input('attachments', []) as $file) {
            $project->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
        }

        foreach ($request->input('images', []) as $file) {
            $project->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('images');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $project->id]);
        }

        return redirect()->route('admin.projects.index');
    }

    public function edit(Project $project)
    {
        abort_if(Gate::denies('project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projects.edit', compact('project'));
    }

    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update($request->all());

        if (count($project->attachments) > 0) {
            foreach ($project->attachments as $media) {
                if (!in_array($media->file_name, $request->input('attachments', []))) {
                    $media->delete();
                }
            }
        }

        $media = $project->attachments->pluck('file_name')->toArray();

        foreach ($request->input('attachments', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $project->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('attachments');
            }
        }

        if (count($project->images) > 0) {
            foreach ($project->images as $media) {
                if (!in_array($media->file_name, $request->input('images', []))) {
                    $media->delete();
                }
            }
        }

        $media = $project->images->pluck('file_name')->toArray();

        foreach ($request->input('images', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $project->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('images');
            }
        }

        return redirect()->route('admin.projects.index');
    }

    public function show(Project $project)
    {
        abort_if(Gate::denies('project_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.projects.show', compact('project'));
    }

    public function destroy(Project $project)
    {
        abort_if(Gate::denies('project_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $project->delete();

        return back();
    }

    public function massDestroy(MassDestroyProjectRequest $request)
    {
        Project::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('project_create') && Gate::denies('project_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Project();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
