<?php

namespace App\Http\Controllers\Admin\Furniture;

use App\Http\Controllers\Controller;
use App\Models\Furniture;

class DestroyController extends Controller
{
    public function __invoke(Furniture $furniture)
    {
        $furniture->delete();
        return redirect()->route('furniture.index');
    }
}
