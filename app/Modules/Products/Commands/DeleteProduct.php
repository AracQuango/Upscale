<?php

namespace Upscale\Modules\Products\Commands;


use Upscale\Modules\Products\Repositories\ProductRepository;
use Illuminate\Support\Facades\Response;

class DeleteProduct
{
    private $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(int $id)
    {
        $result = $this->repository->delete($id);
        return Response::json(["success" => $result], 200);
    }
}