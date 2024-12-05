<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Type_equipment;

class CreateController extends Controller
{
    public function __invoke()
    {
        $equipmentTypes = Type_equipment::all();
        return view('brand.create', compact( 'equipmentTypes'));
    }
}
