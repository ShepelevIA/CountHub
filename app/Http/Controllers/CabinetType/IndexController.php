<?php

namespace App\Http\Controllers\CabinetType;

use App\Http\Controllers\Controller;
use App\Http\Resources\CabinetType\CabinetTypeResource;
use App\Models\Cabinet_type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cabinet_types = Cabinet_type::all();
        return CabinetTypeResource::collection($cabinet_types);
    }
}
