<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'Администратор',
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('roles')->insert([
            'title' => 'Водитель',
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
    }
}
