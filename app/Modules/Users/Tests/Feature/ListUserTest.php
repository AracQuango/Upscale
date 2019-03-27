<?php

namespace Tests\Feature;

use Tests\TestCase;


class ListUserTest extends TestCase
{

    public function test_list_users()
    {
        $response = $this->get(route("listUsers"));

        $response->assertStatus(200);
    }
}
