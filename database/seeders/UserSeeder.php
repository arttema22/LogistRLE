<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Artem',
            'email' => 'arttema@mail.ru',
            'role_id' => 1,
            'password' => Hash::make('1234qwerQWER'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => 'Denis',
            'email' => 'dv1840145@gmail.com',
            'role_id' => 1,
            'password' => Hash::make('x3m9'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '060',
            'email' => 'xaziyllin@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '548',
            'email' => 'smirnov@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '513',
            'email' => 'sashok568@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '185',
            'email' => 'molchanov@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '101',
            'email' => 'lukin_vyacheslav@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '396',
            'email' => 'aleksii.99@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '579',
            'email' => 'davydenkov@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '547',
            'email' => 'alex-1884@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '294',
            'email' => 'mayorov@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '931',
            'email' => 'mers862@mail.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '097',
            'email' => 'Vladimirov@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '792',
            'email' => 'tilik@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '280',
            'email' => 'dymcev@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
        DB::table('users')->insert([
            'name' => '269',
            'email' => 'volmar@inbox.ru',
            'role_id' => 2,
            'password' => Hash::make('radswad0'),
            'created_at' => '2022-09-01 09:00:00',
            'updated_at' => '2022-09-01 09:00:00',
        ]);
    }
}
