<?php

namespace App\Http\Controllers\Admin\CabinetType;

use App\Http\Controllers\Controller;
use App\Models\Cabinet_type;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cabinet_types = Cabinet_type::all();
        return view('cabinetType.index', compact('cabinet_types'));
    }
}
