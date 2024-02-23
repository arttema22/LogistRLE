<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\DirPetrolStation;
use Carbon\Carbon;
use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\SoftDeletes;
use MoonShine\Models\MoonshineUser;

class Refilling extends Model
{

    use HasFactory;
    use Filterable;
    use SoftDeletes;

    /**
     * Получить данные о создателе записи о заправке.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    /**
     * Получить данные о водителе.
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }

    /**
     * Получить данные о АЗС.
     */
    public function petrolStation()
    {
        return $this->belongsTo(DirPetrolStation::class, 'petrol_stations_id', 'id');
    }

    /**
     * Аксессор
     * Преобразует дату из базы в нужный формат.
     * Формат лежит в config\app
     */
    public function getCreatedAtAttribute($value)
    {
        return Carbon::createFromTimestamp(strtotime($value))
            ->format(config('app.date_format'));
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::createFromTimestamp(strtotime($value))
            ->format(config('app.date_format'));
    }

    public function getDeletedAtAttribute($value)
    {
        return Carbon::createFromTimestamp(strtotime($value))
            ->format(config('app.date_format'));
    }
}
