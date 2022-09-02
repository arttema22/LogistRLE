<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Routes;

class DirCargo extends Model {

    use HasFactory;

    /**
     * Получить маршруты, связанные с грузом.
     */
    public function routes() {
        return $this->hasMany(Routes::class, 'cargo_id', 'id');
    }

}
