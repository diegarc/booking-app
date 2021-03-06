<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'name' => 'Hamburg event',
            'location' => 'Hamburgo',
            'lat' => 53.551085,
            'lng' => 9.993682,
            'start_at' => '2017-07-20',
            'end_at' => '2017-07-25',
            'map_img' => 'public/event-maps/event-map-01.png',
        ]);

        DB::table('events')->insert([
            'name' => 'Berlin event',
            'location' => 'Berlín',
            'lat' => 52.520007,
            'lng' => 13.404954,
            'start_at' => '2017-07-22',
            'end_at' => '2017-07-22',
            'map_img' => 'public/event-maps/event-map-02.png',
        ]);
    }
}
