<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        User::factory()->create();
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function test_the_application_returns_a_successful_response1()
    {
        User::factory()->create();
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
