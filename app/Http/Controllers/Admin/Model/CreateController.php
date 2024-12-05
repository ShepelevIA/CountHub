<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Models\Brand;

class CreateController extends Controller
{
    public function __invoke()
    {
        $brands = Brand::all();
        return view('model.create', compact( 'brands'));
    }
}
