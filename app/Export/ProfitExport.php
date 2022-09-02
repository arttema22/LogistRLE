<?php

namespace App\Export;

use App\Models\Profits;
use App\Models\ProfitsData;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ProfitExport implements FromView {

    public function __construct(int $id, int $uid) {
        $this->id = $id;
        $this->uid = $uid;
    }

    public function view(): View {
        return view('exports.profit', [
            'ProfitsData' => ProfitsData::where('profit_id', $this->id)->where('id', $this->uid)->get()
        ]);
    }

}
