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
            '18-30' => 53,
            '30-50' => 21,
            'over50' => 12,
            'reservation_id' => 1
        ]);
    }
}
