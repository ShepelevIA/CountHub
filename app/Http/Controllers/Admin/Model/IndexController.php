<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Model_equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        $model_equipments = Model_equipment::all();
        return view('model.index', compact('brands','model_equipments'));
    }
}
