<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserModuleTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @test
     */
     function userTesting()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee("Usuarios");

    }

    /** @test */
    function userDetailTesting()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee("5");

    }



}
