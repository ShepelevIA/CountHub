<?php

namespace App\Http\Controllers\Admin\CabinetType;

use App\Http\Controllers\Controller;
use App\Http\Requests\CabinetType\UpdateRequest;
use App\Models\Cabinet_type;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Cabinet_type $cabinet_type)
    {
        $data = $request->validated();
        $cabinet_type->update($data);
        return redirect()->route('cabinetType.show', $cabinet_type->id);
    }
}
