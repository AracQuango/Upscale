<?php

namespace Upscale\Modules\Products\Validators;

use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\LaravelValidator;

class ProductValidator extends LaravelValidator
{
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name'             => 'required',
            'sku'              => 'required',
            'info'             => 'required',
            'price'            => 'required',
            'excerpt'          => 'required',
            'description'      => 'required',
            'ext_title'        => 'required',
            'meta_keywords'    => 'required',
            'meta_description' => 'required',
            'options'          => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [],
    ];
}
