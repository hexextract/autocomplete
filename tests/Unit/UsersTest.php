<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class UsersTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testCheckEmptyResponse()
    {
        $response = $this->getJson('/api/users/iqbal');
        $response->assertStatus(204);
    }

    public function testCheckSuccessStatus()
    {
        $response = $this->getJson('/api/users/d');
        $response->assertStatus(200);
    }

    public function testWithoutName()
    {
        $response = $this->getJson('/api/users/');
        $response->assertStatus(400);
    }

}
