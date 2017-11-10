<?php

use Illuminate\Database\Seeder;

class StandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 3000,
            'img' => 'public/stand-photos/stand-02.jpg',
            'top' => 174,
            'left' => 210,
            'width' => 68,
            'height' => 90,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 1800,
            'img' => 'public/stand-photos/stand-03.jpg',
            'top' => 174,
            'left' => 281,
            'width' => 65,
            'height' => 90,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 174,
            'left' => 503,
            'width' => 65,
            'height' => 90,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 174,
            'left' => 571,
            'width' => 65,
            'height' => 90,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 272,
            'left' => 312,
            'width' => 68,
            'height' => 123,
            'event_id' => 2,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 3000,
            'img' => 'public/stand-photos/stand-02.jpg',
            'top' => 272,
            'left' => 382,
            'width' => 72,
            'height' => 123,
            'event_id' => 2,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 1800,
            'img' => 'public/stand-photos/stand-03.jpg',
            'top' => 272,
            'left' => 456,
            'width' => 72,
            'height' => 123,
            'event_id' => 2,
        ]);
    }
}
