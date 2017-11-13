<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VisitTest extends TestCase
{
    /**
     * Get visits.
     *
     * @return void
     */
    public function testDetail()
    {
        $this->json('GET', '/api/visits/1')
            ->assertStatus(200)
            ->assertJson([
                'id' => '1',
                'users' => 100,
                'under18' => 6
            ]);
    }
}
