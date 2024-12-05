<?php

namespace App\Http\Controllers\Admin\FurnitureType;

use App\Http\Controllers\Controller;
use App\Models\Furniture_type;

class DestroyController extends Controller
{
    public function __invoke(Furniture_type $furniture_type)
    {
        $furniture_type->delete();
        return redirect()->route('furnitureType.index');
    }
}
