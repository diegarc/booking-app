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
            'company' => 'Cross|Over',
            'admin' => 'diegarc@gmail.com',
            'address' => '3905 G Street',
            'phone' => '573208004999',
            'logo_img' => 'public/company-logos/stand-logo-01.png',
            'marketing_docs' => 'public/marketing-docs/marketing_docs.zip',
            'stand_id' => 3
        ]);
    }
}
