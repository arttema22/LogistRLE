<?php

declare(strict_types=1);

namespace App\MoonShine\Pages;

use App\Models\Refilling;
use MoonShine\Decorations\Grid;
use MoonShine\Metrics\LineChartMetric;
use MoonShine\Metrics\ValueMetric;
use MoonShine\Pages\Page;

class Dashboard extends Page
{
    public function breadcrumbs(): array
    {
        return [
            '#' => $this->title()
        ];
    }

    public function title(): string
    {
        return $this->title ?: 'Dashboard';
    }

    public function components(): array
    {
        return [
            Grid::make([
                ValueMetric::make(__('Refilling'))
                    ->value(Refilling::count())
                    ->columnSpan(2),

                ValueMetric::make(__('Refilling'))
                    ->value(Refilling::where('status', 1)->count())
                    ->progress(Refilling::count())
                    ->columnSpan(2),

                LineChartMetric::make(__('Refilling'))
                    ->line([
                        'Refilling' => Refilling::query()
                            ->selectRaw('SUM(cost_car_refueling) as sum, DATE_FORMAT(date, "%d.%m.%Y") as date')
                            ->groupBy('date')
                            ->pluck('sum', 'date')
                            ->toArray()
                    ])
                    // ->line([
                    //     'Avg' => Refilling::query()
                    //         ->selectRaw('AVG(cost_car_refueling) as avg, DATE_FORMAT(date, "%d.%m.%Y") as date')
                    //         ->groupBy('date')
                    //         ->pluck('avg', 'date')
                    //         ->toArray()
                    // ], '#EC4176')
                    ->columnSpan(8)
            ]),
        ];
    }
}
