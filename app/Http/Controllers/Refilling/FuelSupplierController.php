<?php

namespace App\Http\Controllers\Refilling;

use App\MonopolyService;
use App\Http\Controllers\Controller;

class FuelSupplierController extends Controller
{
    public function index()
    {
        $Contracts = (new MonopolyService)->callContract();
        $Payments = (new MonopolyService)->callPayment();
        $Transactions = (new MonopolyService)->callTransaction();
        return view('refilling.fuelsupplier', [
            'Contracts' => $Contracts,
            'Payments' => $Payments,
            'Transactions' => $Transactions,
        ]);
    }
}
