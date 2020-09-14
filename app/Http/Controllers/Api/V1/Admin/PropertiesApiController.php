<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use App\Http\Resources\Admin\PropertyResource;
use App\Property;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PropertiesApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('property_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PropertyResource(Property::all());
    }

    public function store(StorePropertyRequest $request)
    {
        $property = Property::create($request->all());

        if ($request->input('accident_photos', false)) {
            $property->addMedia(storage_path('tmp/uploads/' . $request->input('accident_photos')))->toMediaCollection('accident_photos');
        }

        return (new PropertyResource($property))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Property $property)
    {
        abort_if(Gate::denies('property_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new PropertyResource($property);
    }

    public function update(UpdatePropertyRequest $request, Property $property)
    {
        $property->update($request->all());

        if ($request->input('accident_photos', false)) {
            if (!$property->accident_photos || $request->input('accident_photos') !== $property->accident_photos->file_name) {
                if ($property->accident_photos) {
                    $property->accident_photos->delete();
                }

                $property->addMedia(storage_path('tmp/uploads/' . $request->input('accident_photos')))->toMediaCollection('accident_photos');
            }
        } elseif ($property->accident_photos) {
            $property->accident_photos->delete();
        }

        return (new PropertyResource($property))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Property $property)
    {
        abort_if(Gate::denies('property_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $property->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
