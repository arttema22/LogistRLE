<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Traits\Filterable;

class Salary extends Model
{
    use HasFactory, Filterable;

    /**
     * Получить данные о водителе.
     */
    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }

    /**
     * Получить данные о владельце.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    /**
     * Аксессор
     * Преобразует дату из базы в нужный формат.
     * Формат лежит в config\app
     */
    public function getDateAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.date_format'));
    }

    public function getDateEditAttribute()
    {
        return Carbon::parse($this->date)->format('Y-m-d');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.date_full_format'));
    }

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.date_full_format'));
    }
}
