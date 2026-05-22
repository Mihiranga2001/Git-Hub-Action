<?php

namespace Tests\Feature;

use Tests\TestCase;

class UserTest extends TestCase
{
    public function test_get_all_users()
    {
        $response = $this->getJson('/api/get-all-users');

        $response->assertStatus(200);
    }
}
