<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Furniture extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    protected $table = 'furniture';

    public function furnitureTypes()
    {
        return $this->belongsTo(Furniture_type::class, 'furniture_type_id', 'id');
    }

    public function cabinets()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'id');
    }
}
