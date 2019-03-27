<?php

namespace Upscale\Modules\Users\Commands;


use Upscale\Modules\Users\Models\User;
use Upscale\Modules\users\repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Prettus\Validator\Exceptions\ValidatorException;

class CreateUser
{
    /**
     * Local instance of the `UserRepository`
     *
     */
    private $repository;

    /**
     * CreateUser constructor.
     *
     * @param UserRepository $repository
     */
    public function __construct(UserRepository $repository)
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
            $user = $this->repository->create($request->all());
            $token = User::find($user["data"]["id"])->first()->generateApiKey();
            return Response::json(["api_token" => $token], 201);
        } catch (ValidatorException $e) {
            return Response::json($e->getMessageBag(), 422);
        }

    }
}
