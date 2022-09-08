<?php

namespace App\Export;

use App\Models\Profits;
use App\Models\ProfitsData;
use App\Models\Routes;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProfitExport implements FromView
{

    public function __construct(int $id, int $uid)
    {
        $this->id = $id;
        $this->uid = $uid;
    }

    public function view(): View
    {
        return view('exports.profit', [
            'Profit' => Profits::find($this->id),
            'ProfitsData' => ProfitsData::where('profit_id', $this->id)->where('id', $this->uid)->get(),
            'Routes' => Routes::where('profit_id', $this->id)->where('driver_id', $this->uid)->get(),
        ]);
    }
}
