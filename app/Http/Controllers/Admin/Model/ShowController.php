<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\Model_equipment;

class ShowController extends Controller
{
    public function __invoke(Model_equipment $model_equipment)
    {
        return view('model.show', compact('model_equipment'));
    }
}
