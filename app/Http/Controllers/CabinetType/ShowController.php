<?php

namespace App\Http\Controllers\CabinetType;

use App\Http\Controllers\Controller;
use App\Http\Resources\CabinetType\CabinetTypeResource;
use App\Models\Cabinet_type;

class ShowController extends Controller
{
    public function __invoke(Cabinet_type $cabinet_type)
    {
        return new CabinetTypeResource($cabinet_type);
    }
}
