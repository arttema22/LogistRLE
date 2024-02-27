<?php

namespace App\Http\Controllers\Refilling;

use App\Models\User;
use App\MonopolyService;
use App\Models\Refilling;
use Illuminate\Http\Request;
use App\Models\DirPetrolStations;
use App\Http\Filters\PetrolFilter;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Models\Refilling\FuelSupplier;

class FuelSupplierController extends Controller
{
    public function index(Request $request)
    {
        $Contracts = (new MonopolyService)->callContract();
        $Payments = (new MonopolyService)->callPayment();
        $Transactions = (new MonopolyService)->callTransaction();
        //$FuelSuppliers = FuelSupplier::all();
        return view('refilling.fuelsupplier', [
            //  'FuelSuppliers' => $FuelSuppliers,
            'Contracts' => $Contracts,
            'Payments' => $Payments,
            'Transactions' => $Transactions,
        ]);
    }
}
