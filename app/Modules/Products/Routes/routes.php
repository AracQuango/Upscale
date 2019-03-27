<?php

use Upscale\Modules\Products\Commands\ListProducts;
use Illuminate\Support\Facades\Route;

Route::name('product.')->group(function() {
    Route::get("test", function() {
        factory(\Upscale\Modules\Products\Models\Product::class, 100)->create()->each(function($product) {
            dd($product);
        });
    });
    Route::get("/products", ListProducts::class)->name("list");
    Route::post("/products", \Upscale\Modules\Products\Commands\CreateProduct::class)->name("create");
    Route::delete("/products/{id}", \Upscale\Modules\Products\Commands\DeleteProduct::class)->name("delete");
    Route::put("/products/{product}", \Upscale\Modules\Products\Commands\UpdateProduct::class)->name("update");
});
