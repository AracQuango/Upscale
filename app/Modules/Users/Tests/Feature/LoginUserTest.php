<?php

namespace Tests\Feature;

use Upscale\Modules\Users\Models\User;
use Tests\TestCase;

class LoginUserTest extends TestCase
{
    private $repository;

    /**
     * Test.
     */
    public function test_login_users_successfully()
    {
        $loginData = [
            "first_name" => "wesley",
            "last_name" => "peeters",
            "email" => "wesley@onpoint.digital",
            "password" => "123456",
        ];
        User::create($loginData);


        $response = $this->post(route("loginUser"), $loginData);

        $response->assertStatus(200);
        $response->assertJsonStructure([
            "id", "first_name", "last_name", "email", "created_at", "updated_at", "api_token"
        ]);
    }

    /**
     * @inheritdoc
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->repository = $this->app->make('Upscale\Modules\users\repositories\UserRepository');
    }
}
