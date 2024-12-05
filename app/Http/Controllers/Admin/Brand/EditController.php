<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Type_equipment;

class EditController extends Controller
{
    public function __invoke(Brand $brand)
    {
        $equipmentTypes = Type_equipment::all();
        return view('brand.edit', compact('brand','equipmentTypes'));
    }
}
