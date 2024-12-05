<?php

namespace App\Http\Controllers\Building;

use App\Http\Controllers\Controller;
use App\Http\Resources\Building\BuildingResource;
use App\Http\Resources\Building\BuildingShowResource;
use App\Http\Resources\Cabinet\CabinetByBuildingResource;
use App\Models\Building;

class ShowController extends Controller
{
    public function __invoke(Building $building)
    {
//        $cabinets = [];
//        $countFloor = $building->cabinets->groupBy('floor')->count();
//        $building->floor_count = $countFloor;
//        if(isset($building->cabinets)){
//            for ($i = 1; $i <= $countFloor; $i++) {
//                $cabinets[$i] = CabinetByBuildingResource::collection($building->cabinets->where('floor', $i)->sortBy('number_cabinet'));
//            }
//            $building->cabinets = $cabinets;
//
//        }
        return new BuildingShowResource($building);
    }
}
