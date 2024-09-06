<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testIndex(): void
    {
        $response = $this->get('/activities');

        $response->assertStatus(200);
    }

    public function testShow(): void
    {
        $response = $this->get('/activities/id=1');

        $response->assertStatus(200);
    }

    public function testStore(): void
    {
        $data = [
            'id' => 1,
            'type' => 'surf',
            'paid' => true,
            'notes' => 'Test notes',
            'satisfaction' => 5
        ];

        $response = $this->postJson('/activities', $data);

        $response->assertStatus(200);
    }

    public function testUpdate(): void
    {
        $response = $this->put('/activities');

        $response->assertStatus(200);
    }

    public function testDestroy(): void
    {
        $response = $this->delete('/activities/id=99');

        $response->assertStatus(200);
    }
}
