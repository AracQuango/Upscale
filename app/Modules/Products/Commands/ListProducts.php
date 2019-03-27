<?php

namespace Upscale\Modules\Products\Commands;


use Upscale\Modules\Products\Repositories\ProductRepository;

class ListProducts
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke()
    {
        return $this->repository->paginate(25);
    }
}