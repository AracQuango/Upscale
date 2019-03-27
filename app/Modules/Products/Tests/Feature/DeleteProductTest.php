<?php

namespace Upscale\Modules\Products\Tests\Feature;



use Tests\TestCase;

class DeleteProductTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    public function test_delete_product()
    {
        factory(\Upscale\Modules\Products\Models\Product::class, 1)->create()->each(function($product) {
            $response = $this->delete(route("product.delete", ["id" => $product->id]));

            $response->assertStatus(200);
            $response->assertJson(["success" => "true"]);
        });
    }
}