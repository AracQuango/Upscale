<?php

namespace Tests\Feature;

use Tests\TestCase;


class CreateProductTest extends TestCase
{

    public function test_create_product_success()
    {
        $data = [
            'name' => "Onpoint Hoodie",
            'slug' => "onpoint-hoodie",
            'sku' => "OPCA-1",
            'info' => "Super soft hoodie and stuff.",
            'price' => "29.99",
            'excerpt' => "Lorem ipsum dolor...",
            'description' => "Lorem ipsum dolor sit amet.",
            'ext_title' => "Onpoint hoodie",
            'meta_keywords' => "onpoint, hoodie, sweater, soft",
            'meta_description' => "Lorem ipsum dolor sit amet.",
            'options' => "{\"size\": [\"small\", \"medium\", \"large\"]}",
        ];

        $response = $this->post(route("product.create"), $data);

        $response->assertStatus(201);
    }
}
