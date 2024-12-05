<?php

namespace App\Http\Controllers\Cabinet;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cabinet\UpdateRequest;
use App\Models\Cabinet;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Cabinet $cabinet)
    {
        $data = $request->validated();
        $cabinet->update($data);
    }
}
