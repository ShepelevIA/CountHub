<?php

namespace App\Http\Controllers\Admin\FurnitureType;

use App\Http\Controllers\Controller;
use App\Models\Furniture_type;

class EditController extends Controller
{
    public function __invoke(Furniture_type $furniture_type)
    {
        return view('furnitureType.edit', compact('furniture_type'));
    }
}
