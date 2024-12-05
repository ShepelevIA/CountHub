<?php

namespace App\Models;

use App\Traits\Filter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cabinet extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filter;

    protected $guarded = false;
    protected $table = 'cabinets';

    public function cabinetTypes()
    {
        return $this->belongsTo(Cabinet_type::class, 'type_cabinet_id', 'id');
    }

    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }

    public function floors()
    {
        return $this->belongsTo(Floor::class, 'floor', 'id');
    }

    public function equipments()
    {
        return $this->hasMany(Equipment::class, 'cabinet_id' , 'id');
    }

    public function furnitures()
    {
        return $this->hasMany(Furniture::class, 'cabinet_id', 'id');
    }

    public function getParams()
    {
        return [
            'id',
            'type_cabinet_id',
            'title',
            'number_cabinet',
            'floor',
            'created_at',
        ];
    }
}
