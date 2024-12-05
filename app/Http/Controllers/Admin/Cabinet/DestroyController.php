<?php

namespace App\Http\Controllers\Admin\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class DestroyController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        $cabinet->delete();
        return redirect()->route('cabinet.index');
    }
}
