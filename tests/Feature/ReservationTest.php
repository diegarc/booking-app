<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Http\UploadedFile;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReservationTest extends TestCase
{

    /**
     * Create reservation.
     *
     * @return void
     */
    public function testCreate()
    {
        $reservation = [
            'company' => 'company',
            'admin' => 'diegarc@gmail.com',
            'address' => 'address',
            'phone' => 'phone',
            'logo_img' => 'public/company-logos/stand-logo-01.png',
            'marketing_docs' => 'public/marketing-docs/marketing_docs.zip',
            'stand_id' => 5,
        ];

        $this->json('POST', '/api/reservations', $reservation)
            ->assertStatus(200)
            ->assertJson(['id' => '2']);
    }

    /**
     * Consult by event id.
     *
     * @return void
     */
    public function testByEventId()
    {
        $this->json('GET', '/api/reservations/byEventId/1')
            ->assertStatus(200)
            ->assertJson([['id' => '1']])
            ->assertJsonMissing([['id' => '2']]);
    }

    /**
     * Upload logo to reservation.
     *
     * @return void
     */
    public function testUploadLogo()
    {
        $file = ['logo_img' => UploadedFile::fake()->image('logo.jpg')];

        $this->json('POST', '/api/reservations/uploadFile', $file)
            ->assertStatus(200);
    }

    /**
     * Upload marketing docs to reservation.
     *
     * @return void
     */
    public function testUploadMarketingDocs()
    {
        $file = ['marketing_docs' => UploadedFile::fake()->create('marketing-docs.zip')];

        $this->json('POST', '/api/reservations/uploadFile', $file)
            ->assertStatus(200);
    }
}
