<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Equipment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = false;
    protected $table = 'equipment';

    public function models()
    {
        return $this->belongsTo(Model_equipment::class, 'model_id', 'id');
    }

    public function cabinets()
    {
        return $this->belongsTo(Cabinet::class, 'cabinet_id', 'id');
    }

}
