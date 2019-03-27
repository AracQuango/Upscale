<?php

namespace Upscale\Modules\Products\Tests\Feature;

use Tests\TestCase;

class UpdateProductTest extends TestCase
{
    public function test_update_product()
    {
        factory(\Upscale\Modules\Products\Models\Product::class, 1)->create()->each(function($product) {
            $data = [
                'name' => "Onpoint Hoodie",
                'slug' => "onpoint-hoodie",
            ];

            $response = $this->put(route("product.update", ["id" => $product->id]), $data);

            $response->assertStatus(200);
        });
    }

}