<?php

namespace App;

use App\Models\Refilling\FuelSupplier;
use Illuminate\Support\Facades\Http;

class MonopolyService
{
    // Информация по договору (Contract)
    // Метод, возвращающий данные о договоре и его балансе.
    // Метод и его входные параметры
    // HTTP-метод: GET
    // Имя метода: Contract
    // Адрес метода: /api/v1/contracts
    public function callContract()
    {
        $response = Http::withToken(config('services.monopoly.access_token'))
            ->get(config('services.monopoly.url') . '/api/v1/contracts')
            ->collect();

        return $response;

        // if (isset($response)) {
        //     foreach ($response ?? [] as $contract) {
        //         if (!FuelSupplier::where('contract_id', $contract['id'])->exists()) {
        //             FuelSupplier::create([
        //                 'name' => 'Монополия',
        //                 'contract_id' => $contract['id'],
        //                 'number' => $contract['number'],
        //                 'inn' => $contract['inn'],
        //                 'kpp' => $contract['kpp'],
        //                 'date' => $contract['date'],
        //                 'balance' => $contract['balance'],
        //             ]);
        //         } else {
        //             $Contract = FuelSupplier::where('contract_id', $contract['id'])->first();
        //             $Contract->balance = $contract['balance'];
        //             $Contract->save();
        //         };
        //     }
        // }
    }

    // Операции поступления по договору (Payment)
    // Метод и его входные параметры
    // HTTP-метод: GET
    // Имя метода: Payment
    // Адрес метода: /api/v1/contracts/{contractid}/payments?startDate={startDate}&endDate={endDate}&limit={limit}&offset={offset}
    public function callPayment()
    {
        $response = Http::withToken(config('services.monopoly.access_token'))
            ->get(
                config('services.monopoly.url') . '/api/v1/contracts/' . config('services.monopoly.contract_id') . '/payments',
                [
                    'startDate' => date('Y-m-d', strtotime(date('Y-m-d') . " - 14 day")),
                    'endDate' => date('Y-m-d'),
                    'limit' => '1000',
                ]
            )
            ->collect();

        return $response;
    }

    // Операции корректировки по договору (Changes)
    // Метод, возвращающий информацию по операциям корректировки.
    // Метод и его входные параметры
    // HTTP-метод: GET
    // Имя метода: Changes
    // Адрес метода: /api/v1/contracts/{contractid}/changes?startDate={startDate}&endDate={endDate}&limit={limit}&offset={offset}
    public function callChanges()
    {
        $response = Http::withToken(config('services.monopoly.access_token'))
            ->get(
                config('services.monopoly.url') . '/api/v1/contracts/' . config('services.monopoly.contract_id') . '/changes',
                [
                    'startDate' => date('Y-m-d', strtotime(date('Y-m-d') . " - 1 day")),
                    'endDate' => date('Y-m-d'),
                    'limit' => '1000',
                ]
            )
            ->json();

        dd($response);
    }

    // Транзакции по договору (Transaction)
    // Метод, возвращающий информацию по транзакциям.
    // Метод и его входные параметры
    // HTTP-метод: GET
    // Имя метода: Transaction
    // Адрес метода: /api/v1/contracts/{contractid}/transactions?startDate={startDate}&endDate={endDate}&limit={limit}&offset={offset}
    public function callTransaction()
    {
        $response = Http::withToken(config('services.monopoly.access_token'))
            ->get(
                config('services.monopoly.url') . '/api/v1/contracts/' . config('services.monopoly.contract_id') . '/transactions',
                [
                    'startDate' => date('Y-m-d', strtotime(date('Y-m-d') . " - 1 day")),
                    'endDate' => date('Y-m-d'),
                    'limit' => '1000',
                ]
            )
            ->collect();

        return $response;
    }
}
