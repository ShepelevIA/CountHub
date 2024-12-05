<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\UpdateRequest;
use App\Models\Brand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Brand $equipment_brand)
    {
        $data = $request->validated();
        $equipment_brand->update($data);
    }
}
