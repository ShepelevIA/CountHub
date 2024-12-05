<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use App\Models\Equipment;

class DestroyController extends Controller
{
    public function __invoke(Equipment $equipment)
    {
        $equipment->delete();
    }
}
