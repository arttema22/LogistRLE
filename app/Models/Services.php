<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Routes;
use App\Models\DirServices;

class Services extends Model {

    use HasFactory;

    /**
     * Получить данные о марщруте.
     */
    public function route() {
        return $this->belongsTo(Routes::class, 'route_id', 'id');
    }

    /**
     * Получить данные о сервисе.
     */
    public function service() {
        return $this->belongsTo(DirServices::class, 'service_id', 'id');
    }

}
