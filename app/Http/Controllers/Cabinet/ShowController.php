<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Resources\Cabinet\CabinetResource;
use App\Models\Cabinet;

class ShowController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        return new CabinetResource($cabinet);
    }
}
