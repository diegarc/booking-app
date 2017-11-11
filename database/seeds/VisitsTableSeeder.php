<?php

use Illuminate\Database\Seeder;

class VisitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
            'users' => 100,
            'males' => 43,
            'females' => 48,
            'under18' => 6,
            'between1830' => 53,
            'between3150' => 21,
            'over50' => 12,
            'reservation_id' => 1
        ]);
    }
}
