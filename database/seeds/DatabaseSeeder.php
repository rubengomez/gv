<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ServiceTableSeeder::class);
        $this->call(AxesTableSeeder::class);
        $this->call(EngineTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
        $this->call(RejectionTableSeeder::class);
        $this->call(VerificationTableSeeder::class);
        $this->call(TestTableSeeder::class);
    }
}
