<?php

namespace App\Http\Controllers\Furniture;

use App\Http\Controllers\Controller;
use App\Http\Requests\Furniture\UpdateRequest;
use App\Models\Furniture;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Furniture $furniture)
    {
        $data = $request->validated();
        $furniture->update($data);
    }
}
