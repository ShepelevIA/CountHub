<?php

namespace App\Models;

use App\Http\Resources\Cabinet\CabinetByBuildingResource;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\Filter;

class Building extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filter;

    protected $guarded = false;
    protected $table = 'buildings';

    public function floors()
    {
        return $this->hasMany(Floor::class, 'building_id', 'id');
    }

    public function getParams()
    {
        return [
            'id',
            'title',
            'address',
            'count_floor',
            'created_at'
        ];
    }
}
