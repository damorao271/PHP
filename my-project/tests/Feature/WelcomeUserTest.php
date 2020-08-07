<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class WelcomeUserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
    public function welcome_user_id()
    {
        $response = $this->get('/');


        $response->assertStatus(200)
                ->assertSee("Hola");
    }
}
