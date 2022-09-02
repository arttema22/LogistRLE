<table>
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата заправки</th>
            <th scope="col">Водитель</th>
            <th scope="col">АЗС</th>
            <th scope="col">Кол-во</th>
            <th scope="col">Цена 1л</th>
            <th scope="col">Стоимость</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ProfitsData as $Data)
        <tr>
            <td>{{$Data->driver->profile->FullName}}</td>
            <td>Выплаты:</td>
            <td>{{$Data->sum_salary}}</td>
            <td>Заправки:</td>
            <td>{{$Data->sum_refuelings}}</td>
            <td>Маршруты:</td>
            <td>{{$Data->sum_routes}}</td>
            <td>Услуги:</td>
            <td>{{$Data->sum_services}}</td>
            <td>Итого:</td>
            <td>{{$Data->sum_total}}</td>
        </tr>
        @endforeach
    </tbody>
</table>