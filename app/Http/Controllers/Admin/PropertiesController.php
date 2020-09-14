<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyPropertyRequest;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Property;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class PropertiesController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('property_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Property::query()->select(sprintf('%s.*', (new Property)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'property_show';
                $editGate      = 'property_edit';
                $deleteGate    = 'property_delete';
                $crudRoutePart = 'properties';

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
            $table->editColumn('propriety_name', function ($row) {
                return $row->propriety_name ? $row->propriety_name : "";
            });
            $table->editColumn('location', function ($row) {
                return $row->location ? $row->location : "";
            });
            $table->editColumn('contract_number', function ($row) {
                return $row->contract_number ? $row->contract_number : "";
            });
            $table->editColumn('tenant_name', function ($row) {
                return $row->tenant_name ? $row->tenant_name : "";
            });

            $table->editColumn('estimate_reference', function ($row) {
                return $row->estimate_reference ? $row->estimate_reference : "";
            });

            $table->editColumn('damage_statement_1', function ($row) {
                return $row->damage_statement_1 ? $row->damage_statement_1 : "";
            });
            $table->editColumn('damage_value_1', function ($row) {
                return $row->damage_value_1 ? $row->damage_value_1 : "";
            });
            $table->editColumn('notes_1', function ($row) {
                return $row->notes_1 ? $row->notes_1 : "";
            });
            $table->editColumn('damage_statement_2', function ($row) {
                return $row->damage_statement_2 ? $row->damage_statement_2 : "";
            });
            $table->editColumn('damage_value_2', function ($row) {
                return $row->damage_value_2 ? $row->damage_value_2 : "";
            });
            $table->editColumn('notes_2', function ($row) {
                return $row->notes_2 ? $row->notes_2 : "";
            });
            $table->editColumn('damage_statement_3', function ($row) {
                return $row->damage_statement_3 ? $row->damage_statement_3 : "";
            });
            $table->editColumn('damage_value_3', function ($row) {
                return $row->damage_value_3 ? $row->damage_value_3 : "";
            });
            $table->editColumn('notes_3', function ($row) {
                return $row->notes_3 ? $row->notes_3 : "";
            });
            $table->editColumn('damage_statement_4', function ($row) {
                return $row->damage_statement_4 ? $row->damage_statement_4 : "";
            });
            $table->editColumn('damage_value_4', function ($row) {
                return $row->damage_value_4 ? $row->damage_value_4 : "";
            });
            $table->editColumn('notes_4', function ($row) {
                return $row->notes_4 ? $row->notes_4 : "";
            });
            $table->editColumn('damage_statement_5', function ($row) {
                return $row->damage_statement_5 ? $row->damage_statement_5 : "";
            });
            $table->editColumn('damage_value_5', function ($row) {
                return $row->damage_value_5 ? $row->damage_value_5 : "";
            });
            $table->editColumn('notes_5', function ($row) {
                return $row->notes_5 ? $row->notes_5 : "";
            });
            $table->editColumn('damage_statement_6', function ($row) {
                return $row->damage_statement_6 ? $row->damage_statement_6 : "";
            });
            $table->editColumn('damage_value_6', function ($row) {
                return $row->damage_value_6 ? $row->damage_value_6 : "";
            });
            $table->editColumn('notes_6', function ($row) {
                return $row->notes_6 ? $row->notes_6 : "";
            });
            $table->editColumn('damage_statement_7', function ($row) {
                return $row->damage_statement_7 ? $row->damage_statement_7 : "";
            });
            $table->editColumn('damage_value_7', function ($row) {
                return $row->damage_value_7 ? $row->damage_value_7 : "";
            });
            $table->editColumn('notes_7', function ($row) {
                return $row->notes_7 ? $row->notes_7 : "";
            });
            $table->editColumn('damage_statement_8', function ($row) {
                return $row->damage_statement_8 ? $row->damage_statement_8 : "";
            });
            $table->editColumn('damage_value_8', function ($row) {
                return $row->damage_value_8 ? $row->damage_value_8 : "";
            });
            $table->editColumn('notes_8', function ($row) {
                return $row->notes_8 ? $row->notes_8 : "";
            });
            $table->editColumn('damage_statement_9', function ($row) {
                return $row->damage_statement_9 ? $row->damage_statement_9 : "";
            });
            $table->editColumn('damage_value_9', function ($row) {
                return $row->damage_value_9 ? $row->damage_value_9 : "";
            });
            $table->editColumn('notes_9', function ($row) {
                return $row->notes_9 ? $row->notes_9 : "";
            });
            $table->editColumn('damage_statement_10', function ($row) {
                return $row->damage_statement_10 ? $row->damage_statement_10 : "";
            });
            $table->editColumn('damage_value_10', function ($row) {
                return $row->damage_value_10 ? $row->damage_value_10 : "";
            });
            $table->editColumn('notes_10', function ($row) {
                return $row->notes_10 ? $row->notes_10 : "";
            });
            $table->editColumn('accident_photos', function ($row) {
                if (!$row->accident_photos) {
                    return '';
                }

                $links = [];

                foreach ($row->accident_photos as $media) {
                    $links[] = '<a href="' . $media->getUrl() . '" target="_blank"><img src="' . $media->getUrl('thumb') . '" width="50px" height="50px"></a>';
                }

                return implode(' ', $links);
            });
            $table->editColumn('name_1', function ($row) {
                return $row->name_1 ? $row->name_1 : "";
            });
            $table->editColumn('dep_mang_1', function ($row) {
                return $row->dep_mang_1 ? $row->dep_mang_1 : "";
            });
            $table->editColumn('name_2', function ($row) {
                return $row->name_2 ? $row->name_2 : "";
            });
            $table->editColumn('dep_mang_2', function ($row) {
                return $row->dep_mang_2 ? $row->dep_mang_2 : "";
            });
            $table->editColumn('name_3', function ($row) {
                return $row->name_3 ? $row->name_3 : "";
            });
            $table->editColumn('dep_mang_3', function ($row) {
                return $row->dep_mang_3 ? $row->dep_mang_3 : "";
            });
            $table->editColumn('name_4', function ($row) {
                return $row->name_4 ? $row->name_4 : "";
            });
            $table->editColumn('dep_mang_4', function ($row) {
                return $row->dep_mang_4 ? $row->dep_mang_4 : "";
            });
            $table->editColumn('confidence', function ($row) {
                return '<input type="checkbox" disabled ' . ($row->confidence ? 'checked' : null) . '>';
            });

            $table->rawColumns(['actions', 'placeholder', 'accident_photos', 'confidence']);

            return $table->make(true);
        }

        return view('admin.properties.index');
    }

    public function create()
    {
        abort_if(Gate::denies('property_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.properties.create');
    }

    public function store(StorePropertyRequest $request)
    {
        $property = Property::create($request->all());

        foreach ($request->input('accident_photos', []) as $file) {
            $property->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('accident_photos');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $property->id]);
        }

        return redirect()->route('admin.properties.index');
    }

    public function edit(Property $property)
    {
        abort_if(Gate::denies('property_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.properties.edit', compact('property'));
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->update($request->all());

        if (count($property->accident_photos) > 0) {
            foreach ($property->accident_photos as $media) {
                if (!in_array($media->file_name, $request->input('accident_photos', []))) {
                    $media->delete();
                }
            }
        }

        $media = $property->accident_photos->pluck('file_name')->toArray();

        foreach ($request->input('accident_photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $property->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('accident_photos');
            }
        }

        return redirect()->route('admin.properties.index');
    }

    public function show(Property $property)
    {
        abort_if(Gate::denies('property_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.properties.show', compact('property'));
    }

    public function destroy(Property $property)
    {
        abort_if(Gate::denies('property_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $property->delete();

        return back();
    }

    public function massDestroy(MassDestroyPropertyRequest $request)
    {
        Property::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('property_create') && Gate::denies('property_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Property();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
