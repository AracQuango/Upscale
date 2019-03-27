<?php

namespace Tests\Feature;

use Tests\TestCase;


class CreateUserTest extends TestCase
{

    public function test_create_user_successfully()
    {
        $userData = [
            "first_name" => "wesley",
            "last_name" => "peeters",
            "email" => "wesley@onpoint.digital",
            "password" => "123456",
            "password_confirmation" => "123456",
        ];

        $response = $this->post(route("createUser"), $userData);

        $response->assertStatus(201);
    }
}
