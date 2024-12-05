<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\Model\StoreRequest;
use App\Models\Model_equipment;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Model_equipment::firstOrCreate($data);
        return redirect()->route('model.index');
    }
}
