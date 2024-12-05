<?php

namespace App\Http\Resources\Cabinet;

use App\Http\Resources\CabinetType\CabinetTypeResource;
use App\Http\Resources\Equipment\EquipmentByCabinetResource;
use App\Http\Resources\Equipment\EquipmentResource;
use App\Http\Resources\EquipmentType\EquipmentTypeResource;
use App\Http\Resources\Furniture\FurnitureResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CabinetByBuildingResource extends JsonResource
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
            'title' => $this->title,
            'number_cabinet' => $this->number_cabinet,
            //'floor' => $this->floor,
            'type_cabinet' => new CabinetTypeResource($this->cabinetTypes)
        ];
    }
}
