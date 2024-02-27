<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirModelTruckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'Mitsubishi',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'Mercedes-Benz',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'SCANIA',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'HYUNDAI',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'BMW',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'VOLVO',
        ]);
        DB::table('dir_model_trucks')->insert([
            'created_at' => date('Y-m-d h:i:s'),
            'updated_at' => date('Y-m-d h:i:s'),
            'title' => 'ДРУГОЕ',
        ]);
    }
}
