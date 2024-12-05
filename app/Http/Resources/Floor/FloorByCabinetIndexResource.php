<?php

namespace App\Http\Resources\Floor;

use App\Http\Resources\Building\BuildingByCabinetIndexResource;
use App\Http\Resources\Cabinet\CabinetByBuildingResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FloorByCabinetIndexResource extends JsonResource
{
    /**
     * @var mixed
     */

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'floor' => $this->floor,
            'building' => new BuildingByCabinetIndexResource($this->buildings),
        ];
    }
}
