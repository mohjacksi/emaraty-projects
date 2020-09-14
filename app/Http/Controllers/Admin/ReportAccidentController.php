<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyReportAccidentRequest;
use App\Http\Requests\StoreReportAccidentRequest;
use App\Http\Requests\UpdateReportAccidentRequest;
use App\ReportAccident;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ReportAccidentController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('report_accident_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reportAccidents = ReportAccident::all();

        return view('admin.reportAccidents.index', compact('reportAccidents'));
    }

    public function create()
    {
        abort_if(Gate::denies('report_accident_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAccidents.create');
    }

    public function store(StoreReportAccidentRequest $request)
    {
        $reportAccident = ReportAccident::create($request->all());

        foreach ($request->input('accident_photos', []) as $file) {
            $reportAccident->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('accident_photos');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $reportAccident->id]);
        }

        return redirect()->route('admin.report-accidents.index');
    }

    public function edit(ReportAccident $reportAccident)
    {
        abort_if(Gate::denies('report_accident_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAccidents.edit', compact('reportAccident'));
    }

    public function update(UpdateReportAccidentRequest $request, ReportAccident $reportAccident)
    {
        $reportAccident->update($request->all());

        if (count($reportAccident->accident_photos) > 0) {
            foreach ($reportAccident->accident_photos as $media) {
                if (!in_array($media->file_name, $request->input('accident_photos', []))) {
                    $media->delete();
                }
            }
        }

        $media = $reportAccident->accident_photos->pluck('file_name')->toArray();

        foreach ($request->input('accident_photos', []) as $file) {
            if (count($media) === 0 || !in_array($file, $media)) {
                $reportAccident->addMedia(storage_path('tmp/uploads/' . $file))->toMediaCollection('accident_photos');
            }
        }

        return redirect()->route('admin.report-accidents.index');
    }

    public function show(ReportAccident $reportAccident)
    {
        abort_if(Gate::denies('report_accident_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.reportAccidents.show', compact('reportAccident'));
    }

    public function destroy(ReportAccident $reportAccident)
    {
        abort_if(Gate::denies('report_accident_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reportAccident->delete();

        return back();
    }

    public function massDestroy(MassDestroyReportAccidentRequest $request)
    {
        ReportAccident::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('report_accident_create') && Gate::denies('report_accident_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new ReportAccident();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
