<?php

namespace App\Http\Controllers\Admin\CabinetType;

use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke()
    {
        return view('cabinetType.create');
    }
}
