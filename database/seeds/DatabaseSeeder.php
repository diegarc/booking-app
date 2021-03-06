<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EventsTableSeeder::class);
        $this->call(StandsTableSeeder::class);
        $this->call(ReservationsTableSeeder::class);
        $this->call(VisitsTableSeeder::class);
    }
}
