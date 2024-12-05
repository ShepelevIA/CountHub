<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Http\Resources\Model\ModelResource;
use App\Models\Model_equipment;

class ShowController extends Controller
{
    public function __invoke(Model_equipment $model_equipment)
    {
        return new ModelResource($model_equipment);
    }
}
