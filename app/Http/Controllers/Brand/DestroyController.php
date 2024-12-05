<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class DestroyController extends Controller
{
    public function __invoke(Brand $equipment_brand)
    {
        $equipment_brand->delete();
    }
}
