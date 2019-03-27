<?php

namespace Tests\Feature;


use Tests\TestCase;

class ListProductTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_list_products()
    {
        factory(\Upscale\Modules\Products\Models\Product::class, 10)->create();
        $response = $this->get(route("product.list"));

        $response->assertStatus(200);
    }
}
