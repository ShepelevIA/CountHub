<?php

namespace App\Http\Resources\Equipment;

use App\Http\Resources\Cabinet\CabinetByEquipmentResource;
use App\Http\Resources\Model\ModelResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EquipmentResource extends JsonResource
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
            'model_id' => $this->model_id,
            'cabinet_id' => $this->cabinet_id,
            'inventory_number' => $this->inventory_number,
            'model_equipment' => new ModelResource($this->models),
            'cabinet' => new CabinetByEquipmentResource($this->cabinets),
        ];
    }
}
