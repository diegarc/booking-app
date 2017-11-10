<?php

use Illuminate\Database\Seeder;

class ReservationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reservations')->insert([
            'company' => str_random(10),
            'admin' => str_random(20),
            'address' => str_random(25),
            'phone' => str_random(10),
            'logo_img' => 'public/company-logos/stand-logo-01.png',
            'marketing_docs' => 'public/marketing-docs/marketing_docs.zip',
            'stand_id' => 3,
        ]);
    }
}
