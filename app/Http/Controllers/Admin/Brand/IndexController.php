<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Type_equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        $equipmentTypes = Type_equipment::all();
        return view('brand.index', compact('brands','equipmentTypes'));
    }
}
