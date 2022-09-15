$(document).ready(function () {
    // Новая заправка. Автоматический расчет стоимости заправки
    $('input[name=num-liters-car-refueling]').on('input keyup', function () {
        num_lters = $('input[name=num-liters-car-refueling]').val();
        price_1l = $('input[name=price-car-refueling]').val();
        $('input[name=cost-car-refueling]').val(num_lters * price_1l);
    });
    $('input[name=price-car-refueling]').on('input keyup', function () {
        num_lters = $('input[name=num-liters-car-refueling]').val();
        price_1l = $('input[name=price-car-refueling]').val();
        $('input[name=cost-car-refueling]').val(num_lters * price_1l);
    });
    // Новая заправка. Автоматический расчет стоимости заправки


});
