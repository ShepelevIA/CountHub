<?php

namespace App\Http\Resources\Floor;

use App\Http\Resources\Cabinet\CabinetByBuildingResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FloorResource extends JsonResource
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
            'cabinets' => CabinetByBuildingResource::collection($this->cabinets),
        ];
    }
}
