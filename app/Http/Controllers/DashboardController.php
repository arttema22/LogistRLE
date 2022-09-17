<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profits;
use App\Models\ProfitsData;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Refilling;
use App\Models\Routes;
use App\Models\Services;
use App\Models\Salary;
use Maatwebsite\Excel\Facades\Excel;
use App\Export\ProfitExport;
use Illuminate\Support\Facades\Gate;
use App\Http\Filters\ProfitFilter;
use PhpOffice\PhpSpreadsheet\IOFactory;


use alhimik1986\PhpExcelTemplator\PhpExcelTemplator;
use alhimik1986\PhpExcelTemplator\params\ExcelParam;
use alhimik1986\PhpExcelTemplator\params\CallbackParam;
use alhimik1986\PhpExcelTemplator\setters\CellSetterArrayValueSpecial;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    // список сверок
    public function index(Request $request)
    {
        $RoutesAll = Routes::count();
        $RoutesActive = Routes::where('status', 1)->count();
        $RefillingsAll = Refilling::count();
        $RefillingsActive = Refilling::where('status', 1)->count();
        $SalaryAll = Salary::count();
        $SalaryActive = Salary::where('status', 1)->count();
        return view('home', [
            'RoutesAll' => $RoutesAll, 'RoutesActive' => $RoutesActive,
            'RefillingsAll' => $RefillingsAll, 'RefillingsActive' => $RefillingsActive,
            'SalaryAll' => $SalaryAll, 'SalaryActive' => $SalaryActive
        ]);
    }
}
