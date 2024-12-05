<?php

namespace App\Http\Resources\Brand;

use App\Http\Resources\EquipmentType\EquipmentTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BrandResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'type_equipment_id' => $this->type_equipment_id,
            'type_equipment' => new EquipmentTypeResource($this->equipmentTypes),
        ];
    }
}
