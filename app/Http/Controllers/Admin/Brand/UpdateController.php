<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\Brand\UpdateRequest;
use App\Models\Brand;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Brand $brand)
    {
        $data = $request->validated();
        $brand->update($data);
        return redirect()->route('brand.show', $brand->id);
    }
}
