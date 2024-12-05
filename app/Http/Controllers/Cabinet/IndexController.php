<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cabinet\FilterRequest;
use App\Http\Resources\Cabinet\CabinetResource;
use App\Models\Cabinet;

class IndexController extends Controller
{
    public function __invoke(FilterRequest $request)
    {
        $data = $request->validated();

        $cabinets = Cabinet::
            filter($data)
            ->search($data)
            ->sort($data)
            //->dd()
            ->paginate(10);

        return CabinetResource::collection($cabinets);
    }
}
