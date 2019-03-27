<?php

namespace Upscale\Modules\Products\Commands;


use Upscale\Modules\Products\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Prettus\Validator\Exceptions\ValidatorException;

class CreateProduct
{
    /**
     * Local instance of the `UserRepository`
     *
     */
    private $repository;

    /**
     * CreateUser constructor.
     *
     * @param ProductRepository $repository
     */
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Gets called once the class is invoked.
     * This will actually save the user to the database.
     *
     * @param Request $request
     * @param Response $response
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request, Response $response)
    {
        try {
            $product = $this->repository->create($request->all());
            return Response::json($product, 201);
        } catch (ValidatorException $e) {
            return Response::json($e->getMessageBag(), 422);
        }
    }
}