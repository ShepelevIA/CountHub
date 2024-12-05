<?php

namespace App\Http\Controllers\Admin\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class IndexController extends Controller
{
    public function __invoke()
    {
        $cabinets = Cabinet::all();
        return view('cabinet.index', compact('cabinets'));
    }
}
