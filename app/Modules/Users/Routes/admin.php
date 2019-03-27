<?php

use Upscale\Modules\Users\Commands\ListUsers;
use Illuminate\Support\Facades\Route;

Route::group([], function() {
   Route::get("/users", ListUsers::class)->name("listUsers");
});
