<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteBillingSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Пикалево',
            'length' => 460,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Синявино',
            'length' => 237,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Невская Дубровка',
            'length' => 234,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Сертолово (ЛСР)',
            'length' => 230,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Ковалево',
            'length' => 220,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Отрадное',
            'length' => 224,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'СПб, Партизанская 14',
            'length' => 210,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('route_billings')->insert([
            'start' => 'СХТ',
            'finish' => 'Глинка',
            'length' => 205,
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
    }
}
