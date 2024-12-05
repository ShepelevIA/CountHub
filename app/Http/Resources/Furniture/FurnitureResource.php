<?php

namespace App\Http\Resources\Furniture;

use App\Http\Resources\Cabinet\CabinetByFurnitureResource;
use App\Http\Resources\FurnitureType\FurnitureTypeResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FurnitureResource extends JsonResource
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
            'furniture_type' => new FurnitureTypeResource($this->furnitureTypes),
            'furniture_type_id' => $this->furniture_type_id,
            'cabinet' => new CabinetByFurnitureResource($this->cabinets),
            'cabinet_id' => $this->cabinet_id,
            'inventory_number' => $this->inventory_number,
            'color' => $this->color,
        ];
    }
}
