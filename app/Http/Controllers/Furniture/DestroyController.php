<?php

namespace App\Http\Controllers\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Furniture;

class DestroyController extends Controller
{
    public function __invoke(Furniture $furniture)
    {
        $furniture->delete();
    }
}
