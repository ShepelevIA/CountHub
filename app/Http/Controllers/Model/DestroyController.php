<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Models\Model_equipment;

class DestroyController extends Controller
{
    public function __invoke(Model_equipment $model_equipment)
    {
        $model_equipment->delete();
    }
}
