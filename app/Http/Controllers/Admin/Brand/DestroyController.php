<?php

namespace App\Http\Controllers\Admin\Brand;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class DestroyController extends Controller
{
    public function __invoke(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('brand.index');
    }
}
