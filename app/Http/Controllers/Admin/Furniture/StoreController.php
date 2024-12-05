<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Furniture\StoreRequest;
use App\Models\Furniture;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Furniture::firstOrCreate($data);
        return redirect()->route('furniture.index');
    }
}
