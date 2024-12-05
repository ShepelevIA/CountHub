<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Resources\Brand\BrandResource;
use App\Models\Brand;

class IndexController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        return BrandResource::collection($brands);
    }
}
