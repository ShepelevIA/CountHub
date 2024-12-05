<?php

namespace App\Http\Resources\Model;

use App\Http\Resources\Brand\BrandResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ModelResource extends JsonResource
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
            'equipment_brand_id' => $this->type_brand_id,
            'equipment_brand' => new BrandResource($this->brands),
        ];
    }
}
