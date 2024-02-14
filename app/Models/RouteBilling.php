<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DirTypeTruck;
use App\Models\Traits\Filterable;

class RouteBilling extends Model
{

    use HasFactory, Filterable;

    /**
     * Получить тип авто, связанный с тарифом.
     */
    public function typeTruck()
    {
        return $this->belongsTo(DirTypeTruck::class, 'type_truck_id', 'id');
    }
}
