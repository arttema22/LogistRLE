<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ProfitsData;

class Profits extends Model
{

    use HasFactory;

    /**
     * Получить данные о владельце.
     */
    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id', 'id');
    }

    /**
     * Получить данные о начислениях водителю.
     */
    public function profitData()
    {
        return $this->hasMany(ProfitsData::class, 'profit_id', 'id');
    }

    /**
     * Аксессор
     * Преобразует дату из базы в нужный формат.
     * Формат лежит в config\app
     */
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format(config('app.date_format'));
    }
}
