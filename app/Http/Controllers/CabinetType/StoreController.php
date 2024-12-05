<?php

namespace App\Http\Controllers\CabinetType;

use App\Http\Controllers\Controller;
use App\Http\Requests\CabinetType\StoreRequest;
use App\Models\Cabinet_type;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Cabinet_type::firstOrCreate($data);
       // return redirect()->route('cabinetType.index');
    }
}
