<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreReportAccidentRequest;
use App\Http\Requests\UpdateReportAccidentRequest;
use App\Http\Resources\Admin\ReportAccidentResource;
use App\ReportAccident;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ReportAccidentApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('report_accident_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReportAccidentResource(ReportAccident::all());
    }

    public function store(StoreReportAccidentRequest $request)
    {
        $reportAccident = ReportAccident::create($request->all());

        if ($request->input('accident_photos', false)) {
            $reportAccident->addMedia(storage_path('tmp/uploads/' . $request->input('accident_photos')))->toMediaCollection('accident_photos');
        }

        return (new ReportAccidentResource($reportAccident))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(ReportAccident $reportAccident)
    {
        abort_if(Gate::denies('report_accident_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new ReportAccidentResource($reportAccident);
    }

    public function update(UpdateReportAccidentRequest $request, ReportAccident $reportAccident)
    {
        $reportAccident->update($request->all());

        if ($request->input('accident_photos', false)) {
            if (!$reportAccident->accident_photos || $request->input('accident_photos') !== $reportAccident->accident_photos->file_name) {
                if ($reportAccident->accident_photos) {
                    $reportAccident->accident_photos->delete();
                }

                $reportAccident->addMedia(storage_path('tmp/uploads/' . $request->input('accident_photos')))->toMediaCollection('accident_photos');
            }
        } elseif ($reportAccident->accident_photos) {
            $reportAccident->accident_photos->delete();
        }

        return (new ReportAccidentResource($reportAccident))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(ReportAccident $reportAccident)
    {
        abort_if(Gate::denies('report_accident_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $reportAccident->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
