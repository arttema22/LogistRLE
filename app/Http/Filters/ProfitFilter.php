<?php

namespace App\Http\Filters;

use Illuminate\Database\Eloquent\Builder;

/**
 * Description of ProfitFilter
 *
 * @author arttema
 */
class ProfitFilter extends AbstractFilter
{

    public const DRIVER_ID = 'driver-id';
    public const DATE_PROFIT = 'date-profit';

    protected function getCallbacks(): array
    {
        return [
            self::DRIVER_ID => [$this, 'driverId'],
            self::DATE_PROFIT => [$this, 'dateProfit'],
        ];
    }

    public function driverId(Builder $builder, $value)
    {
        $builder->where('driver_id', $value);
    }
    public function dateProfit(Builder $builder, $value)
    {
        $builder->where('date', $value);
    }
}
