<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Furniture;

class IndexController extends Controller
{
    public function __invoke()
    {
        $furnitures = Furniture::all();
        return view('furniture.index', compact('furnitures'));
    }
}
