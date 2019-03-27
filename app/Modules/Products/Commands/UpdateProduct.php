<?php

namespace Upscale\Modules\Products\Commands;


use Upscale\Modules\Products\Models\Product;
use Upscale\Modules\Products\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class UpdateProduct
{
    protected $repository;

    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function __invoke(Product $product, Request $request, Response $response)
    {
        $result = $this->repository->update($request->all(), $product->id);

        return Response::json($request, 200);
    }
}