<?php

namespace App\Http\Controllers\Admin\Building;

use App\Http\Controllers\Controller;
use App\Http\Requests\Building\StoreRequest;
use App\Models\Building;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Building::firstOrCreate($data);
        return redirect()->route('building.index');
    }
}
