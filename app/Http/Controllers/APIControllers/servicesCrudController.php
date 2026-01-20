<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;

class servicesCrudController extends Controller
{
    public function index()
    {
        $this->authorize('view', Service::class);

        return response()->json([
            'services' => Service::paginate(10),
        ]);
    }

    public function store(ServiceRequest $request)
    {
        $this->authorize('create', Service::class);
        $service = Service::create($request->validated());
        return response()->json($service, 201);
    }

    public function show(Service $service)
    {
        $this->authorize('view', $service);
        return response()->json($service);
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $this->authorize('update', $service);
        $service->update($request->validated());
        return response()->json($service->load('reservation'));
    }

    public function destroy(Service $service)
    {
        $this->authorize('delete', $service);
        $service->delete();
        return response()->json(null, 204);
    }
}
