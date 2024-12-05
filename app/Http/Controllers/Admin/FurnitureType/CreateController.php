<?php

namespace App\Http\Controllers\Admin\FurnitureType;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('furnitureType.create');
    }
}
