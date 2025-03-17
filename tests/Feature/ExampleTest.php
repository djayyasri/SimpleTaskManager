<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
{
    $response = $this->get('/');

    // Ensure it redirects
    $response->assertRedirect();
    $response->assertStatus(302);

    // Follow the redirect and check final response
    $finalResponse = $this->get($response->headers->get('Location'));
    $finalResponse->assertStatus(200);
}


}
