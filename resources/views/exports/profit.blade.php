@if (count($Profit->profitData->where('profit_id', $Profit->id)))
@foreach ($Profit->profitData->where('profit_id', $Profit->id) as $Data)
<table>
    <tr>
        <td colspan="7">
            Акт сверки (учетный) {{$Data->id}}
        </td>
    </tr>
    <tr>
        <td colspan="7">
            между ООО "РегионЛесЭкспорт" и
        </td>
    </tr>
    <tr>
        <td colspan="7">
            Мы, нижеподписавшиеся, Директор ООО "РегионЛесЭкспорт" А.В.Клишевич с одной стороны, и с другой стороны,
            составили настоящий акт сверки в том, что состояние взаимных расчетов по данным учета следующее:
        </td>
    </tr>
</table>
<table>
    <thead>
        <tr>
            <th>№</th>
            <th>Дата</th>
            <th>Документ</th>
            <th>Сумма за маршрут</th>
            <th>Топливо</th>
            <th>Выплачено</th>
            <th>Итог</th>
        </tr>
    </thead>
    <!-- Маршруты -->
    @if (count($Data->driver->driverRoute->where('profit_id', $Profit->id)))
    @foreach ($Data->driver->driverRoute->where('profit_id', $Profit->id) as $Route)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $Route->date_route }}</td>
        <td>
            {{ $Route->address_loading }} - {{ $Route->address_unloading }} {{ $Route->route_length
            }} км.
            <!-- Услуги -->
            @if (count($Route->services->where('route_id', $Route->id)))
            @foreach ($Route->services->where('route_id', $Route->id) as $Service)
            <br>{{ $Service->service->title }} {{ $Service->number_operations }} сумма: {{
            $Service->sum }} руб.
            ( {{ $Service->comment }} )
            @endforeach
            @endif
            <!-- Услуги -->
        </td>
        <td>{{ $Route->summ_route }}</td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
    @endif
    <!-- Маршруты -->
    <!-- Заправки -->
    @if (count($Data->driver->driverRefilling->where('profit_id', $Profit->id)))
    @foreach ($Data->driver->driverRefilling->where('profit_id', $Profit->id) as $Refilling)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $Refilling->date_car_refueling }}</td>
        <td>{{ $Refilling->num_liters_car_refueling }} л.</td>
        <td></td>
        <td>{{ $Refilling->cost_car_refueling }}</td>
        <td></td>
        <td></td>
    </tr>
    @endforeach
    @endif
    <!-- Заправки -->
    <!-- Выплаты -->
    @if (count($Data->driver->driverSalary->where('profit_id', $Profit->id)))
    @foreach ($Data->driver->driverSalary->where('profit_id', $Profit->id) as $Salary)
    <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{ $Salary->date }}</td>
        <td>{{ $Salary->comment }}</td>
        <td></td>
        <td></td>
        <td>{{ $Salary->salary }}</td>
        <td></td>
    </tr>
    @endforeach
    @endif
    <!-- Выплаты -->
    <tfoot>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>{{ $Data->sum_routes }}<br>
                {{ $Data->sum_services }} руб. за услуги</td>
            <td>{{ $Data->sum_refuelings }}</td>
            <td>{{ $Data->sum_salary }}</td>
            <td>{{ $Data->sum_total }}</td>
        </tr>
    </tfoot>
</table>
<table>
    <tr>
        <td colspan="5"></td>
        <td colspan="2">
            ООО "РегионЛесЭкспорт"
        </td>
    </tr>
    <tr>
        <td colspan="5"></td>
        <td colspan="2">
            (Клишевич А.В.)
        </td>
    </tr>
</table>
@endforeach
@endif
