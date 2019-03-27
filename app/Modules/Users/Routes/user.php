<?php

use Upscale\Modules\Users\Commands\CreateUser;
use Upscale\Modules\Users\Commands\LoginUser;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
    Route::post("/users", CreateUser::class)->name("createUser");
    Route::post("/users/login", LoginUser::class)->name("loginUser");
});
