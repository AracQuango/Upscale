<?php

namespace Upscale\Modules\Products\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelArdent\Ardent\Ardent;

class Product extends Ardent
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'sku',
        'info',
        'price',
        'excerpt',
        'description',
        'ext_title',
        'meta_keywords',
        'meta_description',
        'options',
    ];

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'options' => 'json',
    ];
}