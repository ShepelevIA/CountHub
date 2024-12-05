<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Resources\Brand\BrandResource;
use App\Models\Brand;

class ShowController extends Controller
{
    public function __invoke(Brand $equipment_brand)
    {
        return new BrandResource($equipment_brand);
    }
}
