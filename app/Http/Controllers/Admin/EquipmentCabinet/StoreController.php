<?php

namespace App\Http\Controllers\Admin\EquipmentCabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cabinet\StoreRequest;
use App\Models\Cabinet;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Cabinet::firstOrCreate($data);
        return redirect()->route('equipmentCabinet.index');
    }
}
