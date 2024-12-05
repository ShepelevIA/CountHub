<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;
use App\Models\Equipment;

class DestroyController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        foreach ($cabinet->equipments as $equipment) {
            $equipment->update(['cabinet_id' => null]);
        }
        $cabinet->delete();
    }
}
