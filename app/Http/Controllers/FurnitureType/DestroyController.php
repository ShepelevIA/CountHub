<?php

namespace App\Http\Controllers\FurnitureType;

use App\Http\Controllers\Controller;
use App\Models\Furniture_type;

class DestroyController extends Controller
{
    public function __invoke(Furniture_type $furniture_type)
    {
        $furniture_type->delete();
    }
}
