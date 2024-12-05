<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\IndexRequest;
use App\Http\Resources\Building\BuildingResource;
use App\Models\Building;


class IndexController extends Controller
{
    public function __invoke(IndexRequest $request)
    {
        $data = $request->validated();

        $buildings = Building::filter($data)
            ->search($data)
            ->sort($data)
            ->paginate(10);

        return BuildingResource::collection($buildings);
    }
}
