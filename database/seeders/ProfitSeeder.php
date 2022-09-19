<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfitSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 1,
            'saldo_start' => 0,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 2,
            'saldo_start' => 0,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 3,
            'saldo_start' => -37760,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 4,
            'saldo_start' => 139306,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 5,
            'saldo_start' => 116499,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 6,
            'saldo_start' => 136836,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 7,
            'saldo_start' => 332169,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 8,
            'saldo_start' => 184101,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 9,
            'saldo_start' => -75684,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 10,
            'saldo_start' => -13952,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 11,
            'saldo_start' => -34904,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 12,
            'saldo_start' => 234862,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 13,
            'saldo_start' => 116715,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 14,
            'saldo_start' => -17122,
            'comment' => 'Начальная загрузка',
        ]);
        DB::table('profits')->insert([
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
            'date' => '2022-09-01',
            'owner_id' => 1,
            'driver_id' => 15,
            'saldo_start' => 73662,
            'comment' => 'Начальная загрузка',
        ]);
    }
}
