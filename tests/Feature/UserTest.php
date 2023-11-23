<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testLoginSuccess(): void
    {
        $response = $this->post('/api/login', [
            'email' => 'admin@admin.com',
            'password' => 'password123'
        ]);

        $response->assertStatus(200);
    }

    public function testRegisterSuccess(): void
    {
        $response = $this->post('/api/register', [
            'email' => 'admin@admin.com',
            'password' => 'password123',
            'name' => 'admin kita'
        ]);

        $response->assertStatus(200);
    }
}
