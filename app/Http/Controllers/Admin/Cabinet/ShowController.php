<?php

namespace App\Http\Controllers\Admin\Cabinet;

use App\Http\Controllers\Controller;
use App\Models\Cabinet;

class ShowController extends Controller
{
    public function __invoke(Cabinet $cabinet)
    {
        return view('cabinet.show', compact('cabinet'));
    }
}
