<?php

namespace App\Http\Controllers\CabinetType;

use App\Http\Controllers\Controller;
use App\Models\Cabinet_type;

class DestroyController extends Controller
{
    public function __invoke(Cabinet_type $cabinet_type)
    {
        $cabinet_type->delete();
       // return redirect()->route('cabinetType.index');
    }
}
