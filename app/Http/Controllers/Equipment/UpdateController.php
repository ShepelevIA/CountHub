<?php

namespace App\Http\Controllers\Equipment;

use App\Http\Controllers\Controller;
use App\Http\Requests\Equipment\UpdateRequest;
use App\Models\Equipment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Equipment $equipment)
    {
        $data = $request->validated();
        $equipment->update($data);
    }
}
