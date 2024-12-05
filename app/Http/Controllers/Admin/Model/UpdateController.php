<?php

namespace App\Http\Controllers\Admin\Model;

use App\Http\Controllers\Controller;
use App\Http\Requests\Model\UpdateRequest;
use App\Models\Model_equipment;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Model_equipment $model_equipment)
    {
        $data = $request->validated();
        $model_equipment->update($data);
        return redirect()->route('model.show', $model_equipment->id);
    }
}
