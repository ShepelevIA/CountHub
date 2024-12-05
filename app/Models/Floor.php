<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Floor extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'floors';
    protected $guarded = false;

    public function buildings()
    {
        return $this->belongsTo(Building::class, 'building_id', 'id');
    }

    public function cabinets()
    {
        return $this->hasMany(Cabinet::class, 'floor', 'id');
    }
}
