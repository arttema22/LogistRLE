<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DirTypeTrucks;

class DistanceBilling extends Model {

    use HasFactory;

    /**
     * Получить тип авто, связанный с тарифом.
     */
    public function typeTruck() {
        return $this->belongsTo(DirTypeTrucks::class, 'type_truck_id', 'id');
    }

}
