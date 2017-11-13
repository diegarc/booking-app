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
            'top' => 370,
            'left' => 155,
            'width' => 160,
            'height' => 170,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 1800,
            'img' => 'public/stand-photos/stand-03.jpg',
            'top' => 400,
            'left' => 320,
            'width' => 115,
            'height' => 135,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 407,
            'left' => 440,
            'width' => 100,
            'height' => 93,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 407,
            'left' => 545,
            'width' => 85,
            'height' => 93,
            'event_id' => 1,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '4m x 2m',
            'cost' => 2500,
            'img' => 'public/stand-photos/stand-01.jpg',
            'top' => 446,
            'left' => 208,
            'width' => 296,
            'height' => 261,
            'event_id' => 2,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 3000,
            'img' => 'public/stand-photos/stand-02.jpg',
            'top' => 710,
            'left' => 208,
            'width' => 296,
            'height' => 154,
            'event_id' => 2,
        ]);

        DB::table('stands')->insert([
            'dimensions' => '2m x 4m',
            'cost' => 1800,
            'img' => 'public/stand-photos/stand-03.jpg',
            'top' => 871,
            'left' => 206,
            'width' => 263,
            'height' => 130,
            'event_id' => 2,
        ]);
    }
}
