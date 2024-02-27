<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'Х 060 МН 178',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'У 548 ОВ 178',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'У 396 КТ 47',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 6,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'С 294 ХК 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'Р 792 НХ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'Р 097 ОТ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'О 579 РН 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'О 547 НТ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 3,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'В 280 ХВ 178',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'В 269 ТЕ 178',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'В 185 АХ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 3,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'В 142 СТ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'В 101 КВ 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 3,
        ]);
        DB::table('trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'reg_number' => 'А 513 ТН 198',
            'dir_type_trucks_id' => 1,
            'dir_model_trucks_id' => 2,
        ]);
    }
}
