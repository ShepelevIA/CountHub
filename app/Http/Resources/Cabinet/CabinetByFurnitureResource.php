<?php

namespace App\Http\Resources\Cabinet;

use App\Http\Resources\Building\BuildingResource;
use App\Http\Resources\CabinetType\CabinetTypeResource;
use App\Http\Resources\Equipment\EquipmentByCabinetResource;
use App\Http\Resources\Equipment\EquipmentResource;
use App\Http\Resources\Floor\FloorByCabinetIndexResource;
use App\Http\Resources\Furniture\FurnitureResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CabinetByFurnitureResource extends JsonResource
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
            'type_cabinet_id' => $this->type_cabinet_id,
            'type_cabinet' => new CabinetTypeResource($this->cabinetTypes),
            'floor' => new FloorByCabinetIndexResource($this->floors),
            'title' => $this->title,
            'number_cabinet' => $this->number_cabinet,

        ];
    }
}
