<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Models\Building;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $buildings = Building::all();
        return view('building.index', compact('buildings'));
    }
}
