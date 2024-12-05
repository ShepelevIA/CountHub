<?php

namespace App\Http\Controllers\Model;

use App\Http\Controllers\Controller;
use App\Http\Resources\Model\ModelResource;
use App\Models\Model_equipment;

class IndexController extends Controller
{
    public function __invoke()
    {
        $model_equipments = Model_equipment::all();
        return ModelResource::collection($model_equipments);
    }
}
