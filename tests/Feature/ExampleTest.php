<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public $user;

    protected function setUp(): void
    {
        //各テストが呼ばれる前に呼び出される
        parent::setUp();

        $this->user = 'hoge'; 
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {

        dump($this->user);
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /** @test */
    public function test_the_application_returns_a_successful_response1()
    {
        dump($this->user);
        $response = $this->get('/');
        $response->assertStatus(200);
    }
}
