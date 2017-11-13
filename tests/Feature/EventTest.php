<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EventTest extends TestCase
{
    /**
     * Set up database.
     */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate:refresh');
        Artisan::call('db:seed');
    }

    /**
     * List events.
     *
     * @return void
     */
    public function testList()
    {
        $this->json('GET', '/api/events')
            ->assertStatus(200)
            ->assertJson([
                ['id' => '1', 'name' => 'Hamburg event'],
                ['id' => '2', 'name' => 'Berlin event'],
            ]);
    }

    /**
     * Get event.
     *
     * @return void
     */
    public function testDetail()
    {
        $this->json('GET', '/api/events/1')
            ->assertStatus(200)
            ->assertJson([
                'id' => '1',
                'name' => 'Hamburg event',
                'stands' => [
                    ['id' => 1, 'cost' => 3000],
                    ['id' => 2, 'cost' => 1800],
                    [
                        'id' => 3,
                        'cost' => 2500,
                        'reservation' => ['id' => 1]
                    ],
                ]
            ]);
    }
}
