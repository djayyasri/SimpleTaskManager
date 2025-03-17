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

    $response->assertRedirect();  // Checks if it's a redirect
    $response->assertStatus(302); // Ensures it actually redirects

    $finalResponse = $this->get($response->headers->get('Location')); // Follow redirect
    $finalResponse->assertStatus(200); // Now check if final page is 200
}

}
