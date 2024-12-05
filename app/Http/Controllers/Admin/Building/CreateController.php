<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('building.create');
    }
}
