<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        $this->call([
            RolesSeeder::class,
            UserSeeder::class,
            ProfileSeeder::class,
            TupeTrucksSeeder::class,
            DistanceBillingSeeder::class,
            RouteBillingSeeder::class,
            CargoSeeder::class,
            PetrolStationsSeeder::class,
            OwnerTruksSeeder::class,
            PlaceWorksSeeder::class,
            AddressesSeeder::class,
            PayersSeeder::class,
            DirServicesSeeder::class,
            RefillingsSeeder::class,
        ]);
    }

}
