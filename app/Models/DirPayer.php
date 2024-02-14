<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Routes;

class DirPayer extends Model
{

    use HasFactory;

    /**
     * Получить маршруты, связанные с плательщиком.
     */
    public function routes()
    {
        return $this->hasMany(Routes::class, 'payer_id', 'id');
    }
}
