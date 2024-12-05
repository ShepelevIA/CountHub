<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Model_equipment;

class EditController extends Controller
{
    public function __invoke(Model_equipment $model_equipment)
    {
        $brands = Brand::all();
        return view('model.edit', compact('model_equipment','brands'));
    }
}
