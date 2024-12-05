<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Furniture;

class ShowController extends Controller
{
    public function __invoke(Furniture $furniture)
    {
        return view('furniture.show', compact('furniture'));
    }
}
