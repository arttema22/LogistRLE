<?php

namespace App\Export;

use App\Models\Profits;
use App\Models\ProfitsData;
use App\Models\Routes;
use Illuminate\Contracts\View\View;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;

class ProfitExport implements FromView, WithStyles, WithColumnWidths
{

    public function __construct(int $id, int $uid)
    {
        $this->id = $id;
        $this->uid = $uid;
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 15,
            'C' => 60,
            'D' => 10,
            'E' => 10,
            'F' => 10,
            'G' => 10,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('B5')->getFont()->setBold(true);
        $sheet->getRowDimension(3)->setRowHeight(-1);
        return [
            'A1' => ['font' => ['size' => 24, 'bold' => true], 'alignment' => ['horizontal' => 'center']],
            'A2' => ['font' => ['size' => 14], 'alignment' => ['horizontal' => 'center']],
            'A3' => ['font' => ['size' => 14], 'alignment' => ['horizontal' => 'center', 'vertical' => 'justify', 'wrapText' => true]],
            'G' => ['font' => ['bold' => true]],
        ];
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
